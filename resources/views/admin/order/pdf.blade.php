<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Laporan Global</h4>
    </center>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No. Nota</th>
                            <th>Tgl. Penjualan</th>
                            <th>Nama Konsumen</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>qty</th>
                            <th>total</th>
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

</body>
</html>
