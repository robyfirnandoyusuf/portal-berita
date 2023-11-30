{{-- Mengekstends tampilan dari halaman layout yang ada di folder backsite-layouts --}}
@extends('backsite-layouts.layout')
@section('title', 'halaman User')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header card-header-text" data-background-color="rose">
                                <a href="{{ route('backsite.user.create') }}"><i
                                        class="material-icons card-title">add</i></a>
                            </div>
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                                width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Dibuat tanggal</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Dibuat tanggal</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if ($user->count() > 0)
                                        @foreach ($user as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('backsite.user.edit', $item->id) }}"
                                                        action="POST" class="btn btn-danger btn-icon ml-5 edit"><i
                                                            class="material-icons">edit</i>
                                                    </a>
                                                    <form action="{{ route('backsite.user.destroy', $item->id) }}"
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
                                            <td class="text-center" colspan="5">User not found</td>
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
        </div>
    </div>



@endsection
