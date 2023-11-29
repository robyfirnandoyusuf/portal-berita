@extends('backsite-layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card bg-white shadow p-4 border-0 rounded-4">
                            <div class="mb-3">
                                <h3 class="fw-bold">Laravel DropZone</h3>
                            </div>
                            <form action="{{ route('backsite.berita.upload') }}" method="post" enctype="multipart/form-data"
                                class="dropzone" id="myDropzone">
                                @csrf
                            </form>
                        </div>
                        <div class="card-content">

                            <form method="post" action="{{ route('backsite.berita.update', $berita->id) }}"
                                class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="card-header card-header-text" data-background-color="rose">
                                    <h4><a href="{{ route('backsite.berita.index') }}"><i
                                                class="material-icons">view_list</i></a></h4>
                                </div>
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Judul</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control" name="judul"
                                                value="{{ $berita->judul }}">
                                            <span class="help-block">Masukan judul berita</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <textarea id="summernote" value="{{ $berita->description }}" name="description"></textarea>
                                            <span class="help-block">Masukan deskripsi berita</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Kategori</label>
                                    <div class="col-sm-10 checkbox-radios">
                                        <select class="form-control js-example-tokenizer" multiple="multiple">
                                            <option>Entertaiment</option>
                                            <option>Pendidikan</option>
                                            <option>Politik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left"></label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <button type="submit" class="btn btn-fill btn-rose">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 100
            });
        });
    </script>
    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>
@endsection('script')
