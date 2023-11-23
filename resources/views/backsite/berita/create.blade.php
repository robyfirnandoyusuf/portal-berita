@extends('backsite-layouts.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="card">
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <form method="post" action="{{ route('backsite.berita.store') }}" class="form-horizontal">
                        @csrf
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title"><i class="material-icons">add</i></h4>
                        </div>
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4><a href="{{ route('backsite.berita.index')}}"><i class="material-icons">view_list</i></a></h4>
                        </div>
                        <div class="card-content">
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
                                <label class="col-sm-2 label-on-left">Kategori</label>
                                <div class="col-sm-10 checkbox-radios">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="kategori" value="entertaiment"> Entertaiment
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="kategori" value="politik"> Politik
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Sumber</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <input type="text" class="form-control" name="sumber" value>
                                        <span class="help-block">Masukan Sumber berita</span>
                                    </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
