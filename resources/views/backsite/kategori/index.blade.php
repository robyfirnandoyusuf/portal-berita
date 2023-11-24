@extends('backsite-layouts.layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-text">
                        <a href="{{ route('backsite.kategori.create') }}" class="button btn btn-primary"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Kategori</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @if($kategori->count() > 0)
                                        @foreach ($kategori as $kategoris)
                                            <tr>
                                                <td>{{ $kategoris->nama_kategori}}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('backsite.kategori.edit', $kategoris->id) }}"
                                                        action="POST" class="btn btn-danger btn-icon ml-5 edit"><i class="material-icons">edit</i>
                                                    </a>

                                                    <form action="{{ route('backsite.kategori.destroy', $kategoris->id) }}" method="POST" onsubmit=" return confirm('Are you sure?')" type="button" class="btn btn-simple btn-danger btn-icon remove">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="3">Kategori not found</td>
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
@endsection
