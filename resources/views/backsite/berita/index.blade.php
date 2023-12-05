@extends('backsite-layouts.layout')
@section('activeBerita', 'active')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header card-header-text" data-background-color="rose">
                                <a href="{{ route('backsite.berita.create') }}"><i
                                        class="material-icons card-title">add</i></a>
                            </div>
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                                width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        {{-- <th>Image</th> --}}
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Judul</th>
                                        {{-- <th>Image</th> --}}
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if ($beritas->count() > 0)
                                        @foreach ($beritas as $berita)
                                            <tr>
                                                <td>{{ $berita->judul }}</td>
                                                <td>{{ $berita->description }}</td>
                                                <td>{{ $berita->category->kategori }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('backsite.berita.edit', $berita->id) }}"
                                                        action="POST" class="btn btn-danger btn-icon ml-5 edit"><i
                                                            class="material-icons">edit</i>
                                                    </a>
                                                    <form action="{{ route('backsite.berita.destroy', $berita->id) }}"
                                                        method="POST" onsubmit=" return confirm('Yakin delete?')"
                                                        type="button" class="btn btn-simple btn-danger btn-icon remove">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i
                                                                class="material-icons">delete</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="4">Berita not found</td>
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

@endsection('content')
