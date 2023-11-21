@extends('backsite-layouts.layout')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">view_list</i>
                        <h4 class="card-title">Data Berita</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <a href="{{ route('berita.create')}}"><i class="material-icons">add</i></a>
                        </div>
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Sumber</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Sumber</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if($beritas->count() > 0)
                                    @foreach ($beritas as $berita)
                                    <tr>
                                        <td>{{ $berita->judul }}</td>
                                        <td>{{ $berita->kategori }}</td>
                                        <td>{{ $berita->sumber }}</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">edit</i></a>
                                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                Tidak ada berita
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>

@endsection('content')
