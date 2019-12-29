
<button href="#" class="btn btn-lg btn-outline-success btn-circle" data-toggle="modal" data-target="#add">
    <i class="fas fa-plus"></i>
</button>

<!-- Modal ADD -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Mahasiswa</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <!-- End Modal header -->
            <form action="/barang" method="post">
                @csrf
                <div class="modal-body">
                    <div id="error_add"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Kode Barang</label>
                                    <div class="col-md-12">
                                        <input name="kd_brg" class="form-control @error('kd_brg') is-invalid @enderror" type="text" placeholder="Kode Barang" value="{{ old('kd_brg') }}">
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
                                        <input name="nm_brg"class="form-control" type="text" placeholder="Nama Barang" value="{{ old('nm_brg') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Satuan</label>
                                    <div class="col-md-12">
                                        <input name="satuan" class="form-control" type="text" placeholder="Satuan" value="{{ old('satuan') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga</label>
                                    <div class="col-md-12">
                                        <input name="harga" class="form-control" type="text" placeholder="Harga" value="{{ old('harga') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Harga Beli</label>
                                    <div class="col-md-12">
                                        <input name="harga_beli" class="form-control" type="text" placeholder="Harga Beli" value="{{ old('harga_beli') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Stok</label>
                                    <div class="col-md-12">
                                        <input name="stok" class="form-control" type="text" placeholder="Stok" value="{{ old('stok') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Stok Minimal</label>
                                    <div class="col-md-12">
                                        <input name="stok_min"  class="form-control" type="text" placeholder="Stok Min" value="{{ old('stok_min') }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End container -->
                </div>
                <!-- End Modal body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-border btn-round"><i class="fas fa-save"></i> Simpan</button>
                    <button class="btn btn-danger btn-border btn-round" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i> Close</button>
                </div>
                <!-- End Modal footer -->
            </form>
        </div>
        <!-- End Modal content -->
    </div>
    <!-- End Modal dialog -->
</div>
<!-- End Modal ADD -->
