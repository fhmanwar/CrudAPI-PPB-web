@extends('admin.layout.main')
@section('Data penjualan')
@section('content')

<div class="row">
    <div class="col-12">
        {{-- <p>@include('admin.konsumen.create')</p> --}}
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
                        <th>No. Nota</th>
                        <th>Tgl. Penjualan</th>
                        <th>Nama Konsumen</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>qty</th>
                        <th>total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            @if ($loop->iteration == 0)
                                <tr>
                                    <td colspan="7">Data kosong</td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->nm_anggrek }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->qty }}</td>
                                    <td>{{ $row->total }}</td>
                                    <td>
                                        {{-- @include('admin.konsumen.read')
                                        @include('admin.konsumen.update') --}}
                                        {{-- @include('admin.konsumen.delete') --}}
                                        {{-- <form action="/konsumen/{{ $row->id }}" method="post" class="d-inline"> --}}
                                        {{-- <form action="{{ route('admin.konsumen', $row->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm btn-circle" ><i class="fas fa-trash-alt"></i></button>
                                        </form> --}}
                                        <form action="/konsumen/{{ $row->id }}" method="post" class="d-inline">
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
