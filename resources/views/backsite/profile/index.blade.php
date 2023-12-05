@extends('backsite-layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header card-header-text" data-background-color="rose">
                                <i class="material-icons card-title">person</i></a>
                            </div>
                            <form method="post" action="{{ route('backsite.profile.update') }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left"></label>
                                    <div class="col-md-3 col-sm-4">
                                        <legend>Avatar</legend>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-circle">
                                                <img src="../../assets/img/placeholder.jpg" alt="..." />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                            <div>
                                                <span class="btn btn-round btn-rose btn-file">
                                                    <span class="fileinput-new">Add Photo</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="imageProfile" />
                                                </span>
                                                <br />
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Nama</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                            <span class="help-block">Masukan nama</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Username</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}">
                                            <span class="help-block">Masukan Username</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="judul" class="col-sm-2 label-on-left">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                            <span class="help-block">Masukan Email</span>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
