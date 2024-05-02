@extends('back.blank')
@section('content')
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Testimonial</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Testimonial
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <li class="list-inline-item">
                    <div class="searchbar">
                        <form action="{{route('testimonial.index')}}" method="get">
                            <div class="input-group">
                                <input
                                        type="search"
                                        name="query"
                                        class="form-control"
                                        placeholder="Search"
                                        aria-label="Search"
                                        aria-describedby="button-addon2"
                                        value="{{request('query')}}"
                                />
                                <div class="input-group-append">
                                    <button
                                            class="btn btn-outline-secondary"
                                            type="submit"
                                            id="button-addon2"
                                    >
                                        <li class="fa fa-search"></li>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <div class="float-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            id="#myBtn">
                        Input
                        <li class="fa fa-cloud-upload"></li>
                    </button>
                </div>
            </div>
            <div class="card-body col-md-12">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Catatan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                    </thead>
                    <tbody>
                    @forelse($testimonials as $testimonial)
                        <tr>
                            <td>{{$loop->iteration +$startIndex}}</td>
                            <td>{{$testimonial->name}}</td>
                            <td>{{$testimonial->job}}</td>
                            <td>{{$testimonial->note}}</td>
                            <td>@forelse($testimonial->images as $image)
                                    <img src="/{{$image->name_path}}" class="card-img h-100" alt="Card image"
                                         style="width: 200px">
                                @empty
                                    <img src="/assets/images/orang.jpg" class="card-img h-100" alt="Card image">
                                @endforelse</td>
                            <td>
                                <div class="form-group">
                                    <a href="" class="btn btn-outline-warning" data-toggle="modal"
                                       data-target="#exampleModal-{{$testimonial->id}}"
                                       id="#myBtn"><i class="feather icon-edit-2"></i></a>
                                    {{--                                    <a href="" class="btn btn-outline-secondary" data-toggle="modal" data-target="#showModal-{{$testimonial->id}}"--}}
                                    {{--                                       id="#myBtn" ><i class="feather icon-eye"></i></a>--}}
                                    <form action="{{route('testimonial.destroy',$testimonial)}}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"><i
                                                    class="feather icon-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">Data Tidak Ada!!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {!!$testimonials->links()!!}
            </div>
        </div>
    </div>
    {{--modal input--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Masukkan Nama">
                                @error('name')
                                <span class="invalid-feedback text-capitalize">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="job" class="form-control @error('job') is-invalid @enderror"
                                       placeholder="Masukkan Pekerjaan">
                                @error('job')
                                <span class="invalid-feedback text-capitalize">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <textarea type="text" name="note"
                                          class="form-control @error('note') is-invalid @enderror"
                                          placeholder="Catatan"></textarea>
                                @error('note')
                                <span class="invalid-feedback text-capitalize">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <label>Upload Gambar</label>
                                <input type="file" name="name_path" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('back.testimonials.edit')
@endsection