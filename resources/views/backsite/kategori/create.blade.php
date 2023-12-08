@extends('backsite-layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('backsite.kategori.store') }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="card-header card-header-text" data-background-color="rose">
                                <h4 class="card-title">Select Kategori</h4>
                            </div>
                            <div class="card-content">
                                <!-- <div class="row">
                                    <label class="col-sm-2 label-on-left">Nama</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="name" value placeholder="Masukkan nama anda">
                                            <span class="help-block">Masukkan nama anda.</span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Kategori</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" name="kategori" value
                                                placeholder="Pilih Kategori">
                                            <span class="help-block">Pilih Kategori.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left"></label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <button type="submit" class="btn btn-fill btn-rose">Submit</button>
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