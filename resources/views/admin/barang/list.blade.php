@extends('admin.layout.file')

@section('content')

<div class="row">
    <div class="col-12">
        <p>@include('admin.barang.create')</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="databrg" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th class="text-right">
                            <br>Harga
                            <br>Harga Beli
                        </th>
                        <th class="text-right">
                            <br>Stok
                            <br>Stok Minimal
                        </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $row)
                            @if ($loop->iteration == 0)
                                <tr>
                                    <td colspan="7">Data kosong</td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $row->kd_brg }}</td>
                                    <td>{{ $row->nm_brg }}</td>
                                    <td>{{ $row->satuan }}</td>
                                    <td class="text-right">
                                        {{ $row->harga }} <br>
                                        {{ $row->harga_beli }}
                                    </td>
                                    <td class="text-right">
                                        {{ $row->stok }} <br>
                                        {{ $row->stok_min }}
                                    </td>
                                    <td>
                                        @include('admin.barang.read')
                                        @include('admin.barang.update')
                                        {{-- @include('admin.barang.delete') --}}
                                        {{-- <form action="/barang/{{ $row->id }}" method="post" class="d-inline"> --}}
                                        <form action="/barang/{{ $row->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm btn-circle" ><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

@endsection
