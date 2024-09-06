<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $artists = Artist::all();
        if ($request->input('query'))
        {
            $query = $request->input('query');
            $merchandises = Merchandise::where('name','LIKE',"%$query%")->paginate();
        }
        else
        {
            $merchandises = Merchandise::latest()->paginate();
        }

        return view('back.merchandises.index',compact('merchandises','artists'));
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
                'artist_id'=>'required',
                'name'=>'required',
                'price'=>'required',
                'name_path'=>'mimes:jpeg,png,jpg,JPG,JPEG|max:2048'
            ],$message);

            $merchandise = Merchandise::create([
                'artist_id'=>$request->artist_id,
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->input('description') ?: null
            ]);
            if ($request->name_path)
            {
                $file = $request->file('name_path');
                $fileName = $file->getClientOriginalName();
                $file->move(storage_path('app/public/images'), $fileName);

                if(!$merchandise->images()->exists())
                {
                    $merchandise->images()->create([
                        'name_path'=>$fileName,
                        'imageable_id'=>$merchandise->id,
                        'imageable_type'=>Merchandise::class
                    ]);
                }
                else
                {
                    $merchandise->images()->update([
                        'name_path'=>$fileName,
                        'imageable_id'=>$merchandise->id,
                        'imageable_type'=>Merchandise::class
                    ]);
                }

            }
            toast('Data berhasil disimpan','success');
            DB::commit();
            return redirect()->route('merchandise.index',$merchandise);
        }
        catch (\Exception $exception)
        {
            toast('Data gagal disimpan!!','error');
            DB::rollBack();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function show(Merchandise $merchandise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchandise $merchandise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchandise $merchandise)
    {
        try {
            $message =  [
                'required'=>'Wajib Diisi'
            ];
            $request->validate([
                'name'=>'required',
                'price'=>'required',
                'artist_id'=>'required',
                'name_path'=>'mimes:jpeg,png,jpg,JPG,JPEG|max:2048',
            ],$message);
            $merchandise->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'artist_id'=>$request->artist_id,
                'description'=>$request->input('note') ?: null
            ]);
            if ($request->name_path)
            {
                $file = $request->file('name_path');
                $fileName = $file->getClientOriginalName();
                $file->move(storage_path('app/public/images'),$fileName);

                if (!$merchandise->images()->exists())
                {
                    $merchandise->images()->create([
                        'name_path'=>$fileName,
                        'imageable_id'=>$merchandise->id,
                        'imageable_type'=>Album::class
                    ]);
                }
                else
                {
                    $merchandise->images()->update([
                        'name_path'=>$fileName,
                        'imageable_id'=>$merchandise->id,
                        'imageable_type'=>Album::class
                    ]);
                }
            }
            toast('data berhasil diupdate!!!','success');
            DB::commit();
            return redirect()->route('merchandise.index',$merchandise);
        }
        catch (\Exception $exception)
        {
            toast('data gagal diupdate!!!','error');
            DB::rollBack();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchandise $merchandise)
    {
        try {
            $merchandise->delete();
            foreach ($merchandise->images as $image) {
                // Hapus gambar dari penyimpanan
                if (Storage::exists($image->name_path)) {
                    Storage::delete($image->name_path);
                }

                // Hapus entri gambar dari database
                $image->delete();
            }
            toast('Data berhasil dihapus!!!','success');
            DB::commit();
            return redirect()->route('album.index');
        }
        catch (\Exception $exception)
        {
            toast('Data gagal dihapus!!!','error');
            DB::rollBack();
            return back();
        }
    }
}
