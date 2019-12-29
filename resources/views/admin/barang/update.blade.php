<button type="button" class="btn btn-outline-warning btn-sm btn-circle" style="margin-right:5px;" data-toggle="modal" data-target="#update{{$row->id}}">
    <i class="fas fa-cogs"></i>
</button>

<!-- Modal update -->
<div class="modal fade" id="update{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form action="/barang/{{ $row->id }} " method="post">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div id="error_update"></div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Kode Barang</label>
                                    <div class="col-md-12">
                                        <input name="kd_brg" class="form-control @error('kd_brg') is-invalid @enderror" type="text" placeholder="Kode Barang" value="{{ $row->kd_brg }}" >
                                        @error('kd_brg')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Nama Barang</label>
                                    <div class="col-md-12">
                                        <input name="nm_brg" class="form-control @error('nm_brg') is-invalid @enderror" type="text" placeholder="Nama Barang" value="{{ $row->nm_brg }}" >
                                        @error('nm_brg')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Satuan</label>
                                    <div class="col-md-12">
                                        <input name="satuan" class="form-control" type="text" placeholder="Satuan" value="{{ $row->satuan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-md-12">
                                        <input name="harga" class="form-control" type="text" placeholder="Harga" value="{{ $row->harga }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga Beli</label>
                                    <div class="col-md-12">
                                        <input name="harga_beli" class="form-control" type="text" placeholder="Harga Beli" value="{{ $row->harga_beli }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Stok</label>
                                    <div class="col-md-12">
                                        <input name="stok" class="form-control" type="text" placeholder="Stok" value="{{ $row->stok }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Stok Minimal</label>
                                    <div class="col-md-12">
                                        <input name="stok_min"  class="form-control" type="text" placeholder="Stok Min" value="{{ $row->stok_min }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End container -->

                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-border btn-round" id="update"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn btn-danger btn-border btn-round" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Update -->
