@extends('backsite-layouts.layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <form  action="{{ route('backsite.role.update', $role->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">Edit Role</h4>
                        </div>
                        {{-- <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Nama</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="nama" value placeholder="Masukkan Nama">
                                        <span class="help-block">Masukkan nama anda.</span>
                                    </div>
                                </div>
                        </div> --}}
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Role</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="nama_role" value="{{ $role->nama_role}}" placeholder="Pilih Role">
                                        <span class="help-block">Pilih antara Admin/User.</span>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left"></label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <button type="submit" class="btn btn-fill btn-rose">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
