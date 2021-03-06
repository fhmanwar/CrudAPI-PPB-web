@extends('admin.layout.main')
@section('title','Cemilan')
@section('content')
<div class="row">
    <div class="col-12">
        <p>@include('admin.cemilan.create')</p>
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
                        <th>image</th>
                        <th>Nama Cemilan</th>
                        <th class="text-right">Harga </th>
                        <th class="text-center">Deskripsi</th>
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
                                    <td>
                                        @if ($row->image != "")
                                            {{-- <img src="{{ asset('image/upload/cemilan/'.$row->image) }}" class="img img-thumbnail" width="60"> --}}
                                            <img src="{{ url($row->image) }}" class="img img-thumbnail" width="60">
                                        @else
                                            {{ 'Tidak ada' }}
                                        @endif
                                    </td>
                                    <td>{{ $row->nm_brg }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->desc }}</td>
                                    <td>
                                        @include('admin.cemilan.read')
                                        @include('admin.cemilan.update')
                                        <form action="/cemilan/{{ $row->id }}" method="post" class="d-inline">
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
