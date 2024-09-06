@foreach($merchandises as $merchandise)
<div class="modal fade" id="exampleModal-{{$merchandise->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Artist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('merchandise.update',$merchandise->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <select name="artist_id" class="form-control @error('artist_id') is-invalid @enderror" >
                                <option value="{{$merchandise->artist_id}}">{{$merchandise->artist->name}}</option>
                                @foreach($artists as $artist)
                                    <option value="{{$artist->id}}" @if($merchandise->artist_id == $artist->id) @endif>{{$artist->name}}</option>
                                @endforeach
                            </select>
                            @error('artist_id')
                            <span class="invalid-feedback text-capitalize">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$merchandise->name}}" >
                            @error('name')
                            <span class="invalid-feedback text-capitalize">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$merchandise->price}}">
                            @error('price')
                            <span class="invalid-feedback text-capitalize">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror">{{value($merchandise->description)}}</textarea>
                            @error('description')
                            <span class="invalid-feedback text-capitalize">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-8">
                            <label>Upload Gambar</label>
                            <input type="file" name="name_path" class="form-control">
                            <label style="font-size: 10px" >MAX:2048 | jpeg,png,jpg</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
