
<button type="button" class="btn btn-outline-info btn-sm btn-circle" style="margin-right:5px;" data-toggle="modal" data-target="#detail{{$row->id}} ">
    <i class="fas fa-info"></i>
</button>

<!-- Modal Detail -->
<div class="modal fade" id="detail{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Detail Barang</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th width="30%">Kode Barang</th>
                                <th>: {{ $row->kd_brg }}</th>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <th>: {{ $row->nm_brg }}</th>
                            </tr>
                            <tr>
                                <td>Satuan</td>
                                <th>: {{ $row->satuan }}</th>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <th>: {{ $row->harga }} </th>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <th>: {{ $row->harga_beli }} </th>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <th>: {{ $row->stok }}</th>
                            </tr>
                            <tr>
                                <td>Stok Minimal</td>
                                <th>: {{ $row->stok_min }}</th>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-border btn-round" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Detail -->
