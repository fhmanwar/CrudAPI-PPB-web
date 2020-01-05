<button href="#" class="btn btn-lg btn-outline-success btn-circle" data-toggle="modal" data-target="#add">
    <i class="fas fa-plus"></i>
</button>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
				<h3 class="modal-title" id="exampleModalLongTitle" aria-hidden="true">Tambah Data Jenis</h3>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<form action="/anggrek" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div id="error_add"></div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Anggrek</label>
                        <input type="text" class="form-control" required="" placeholder="Nama Anggrek" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Harga </label>
                                <input name="price" class="form-control" type="text" placeholder="Harga" value="{{ old('price') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Image </label>
                                <input type="file" class="form-control" placeholder="Image" name="image" value="{{ old('image') }}">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Deskripsi </label>
                        <textarea class="form-control" rows="3" placeholder="Deskripsi" name="desc">{{ old('desc') }}</textarea>
                    </div>



                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-border btn-round"><i class="fas fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-warning btn-border btn-round"> <i class="fas fa-undo"></i> Reset </button>
                    <button class="btn btn-danger btn-border btn-round" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i> Close</button>
                </div>
            </form>
		</div>
	</div>
</div>


