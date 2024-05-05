<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Event;
use App\Gallery;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $artists = Artist::all();
        $albums = Album::all();
        $events = Event::all();
        if ($request->input('query'))
        {
            $query = $request->input('query');
            $galleries = Gallery::where('name','LIKE',"%$query%")->paginate();
        }
        else
        {
            $galleries = Gallery::latest()->paginate();
        }

        return view('back.albums.index',compact('albums','artists','events','galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $message = [
              'required'=>'Wajib Diisi!!'
            ];
            $request->validate([
              'name_path'=>'required|mimes:jpeg,png,jpg,JPG,JPEG|max:2048'
            ],$message);
            $gallery = Gallery::create([
                'event_id'=>$request->input('event_id') ?: null,
                'album_id'=>$request->input('album_id') ?: null,
                'artist_id'=>$request->input('artist_id') ?: null,
                'name'=>$request->input('name') ?: null
            ]);
            if ($request->name_path)
            {
                $file = $request->file('name_path');
                $fileName = $file->getClientOriginalName();
                $file->move(storage_path('app/public/images'), $fileName);
                $fileLocation ='storage/images/'.$fileName;

                if(!$gallery->images()->exists())
                {
                    $gallery->images()->create([
                        'name_path'=>$fileLocation,
                        'imageable_id'=>$gallery->id,
                        'imageable_type'=>Gallery::class
                    ]);
                }
                else
                {
                    $gallery->images()->update([
                        'name_path'=>$fileLocation,
                        'imageable_id'=>$gallery->id,
                        'imageable_type'=>Gallery::class
                    ]);
                }

            }
            DB::commit();
            toast('Data berhasil ditambah','success');
            return redirect()->route('gallery.index',compact('gallery'));
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            toast('Data gagal ditambah!!','error');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        try {
            $message = [
                'required'=>'Wajib Diisi!!'
            ];
            $request->validate([
                'name_path'=>'required|mimes:jpeg,png,jpg,JPG,JPEG|max:2048'
            ],$message);
            $image->update([
                'event_id'=>$request->input('event_id') ?: null,
                'album_id'=>$request->input('album_id') ?: null,
                'artist_id'=>$request->input('artist_id') ?: null,
                'name'=>$request->input('name') ?: null
            ]);
            if ($request->name_path)
            {
                $file = $request->file('name_path');
                $fileName = $file->getClientOriginalName();
                $file->move(storage_path('app/public/images'), $fileName);
                $fileLocation ='storage/images/'.$fileName;

                if(!$gallery->images()->exists())
                {
                    $gallery->images()->create([
                        'name_path'=>$fileLocation,
                        'imageable_id'=>$gallery->id,
                        'imageable_type'=>Gallery::class
                    ]);
                }
                else
                {
                    $gallery->images()->update([
                        'name_path'=>$fileLocation,
                        'imageable_id'=>$gallery->id,
                        'imageable_type'=>Gallery::class
                    ]);
                }

            }
            DB::commit();
            toast('Data berhasil ditambah','success');
            return redirect()->route('gallery.index',compact('gallery'));
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            toast('Data gagal ditambah!!','error');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
