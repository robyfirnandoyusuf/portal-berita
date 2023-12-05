@extends('backsite-layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="bg-white shadow p-4 border-0 rounded-4 mt-4">
                                <div class="card-header card-header-text" data-background-color="rose">
                                    <h4><a href="{{ route('backsite.berita.index') }}"><i
                                                class="material-icons">view_list</i></a></h4>
                                </div>
                                <div class="mb-3">
                                    <h5 class="">Upload Gambar</h5>
                                </div>
                                <form action="{{ route('backsite.berita.upload') }}" method="post"
                                    enctype="multipart/form-data" class="dropzone" id="myDropzone">
                                    @csrf
                                </form>
                            </div>
                            <form method="post" action="{{ route('backsite.berita.store') }}" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Judul</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control" name="judul" value>
                                            <span class="help-block">Masukan judul berita</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <textarea id="summernote" name="description"></textarea>
                                            <span class="help-block">Masukan deskripsi berita</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Kategori</label>
                                    <div class="col-md-6 col-sm-10 checkbox-radio">
                                        <select class="selectpicker" data-style="btn btn-rose btn-round"
                                            title="Single Select" data-size="7" name="id_kategori">
                                            <option disabled selected>Pilih Katergori</option>
                                            @foreach ($kategoris as $kategori)
                                                <option value="{{$kategori->id}}">{{ $kategori->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-10 checkbox-radios">
                                        <select class="form-control js-example-tokenizer" multiple="multiple"
                                            name="kategori">
                                            @foreach ($kategoris as $kategori)
                                                <option>{{ $kategori->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
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
@endsection

@section('script')
    {{-- Dropzone --}}

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview']],
                ],
                dialogsInBody: true
            });
        });
    </script>
    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>
    <script type="text/javascript">
        Dropzone.options.myDropzone = {
            maxFilesize: 12,
            renameFile: function(file) {
                var img = new Gambar();
                var time = img.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg",
            ".jpg",
            ".png",
            ".gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }

        };
    </script>
@endsection
<!-- include libraries(jQuery, bootstrap) -->
<!-- include summernote css/js -->
