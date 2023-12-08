@extends('backsite-layouts.layout')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="bg-white shadow p-4 border-0 rounded-4 mt-4">
                            <div class="mb-3">
                                <div class="card-header card-header-text" data-background-color="rose">
                                    <h4><a href="{{ route('backsite.user.index') }}"><i
                                        class="material-icons">view_list</i>
                                    </a></h4>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{ route('backsite.user.store') }}" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <label for="judul" class="col-sm-2 label-on-left">Nama</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <input type="text" class="form-control" name="name" value>
                                        <span class="help-block">Masukan nama elu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="judul" class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <input type="email" class="form-control" name="email" value>
                                        <span class="help-block">Masukan email elu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="judul" class="col-sm-2 label-on-left">Username</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <input type="text" class="form-control" name="username" value>
                                        <span class="help-block">Masukan username elu</span>
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
