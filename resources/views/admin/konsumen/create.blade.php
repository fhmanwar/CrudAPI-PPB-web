<button href="#" class="btn btn-lg btn-outline-success btn-circle" data-toggle="modal" data-target="#add">
    <i class="fas fa-plus"></i>
</button> Add

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
				<h3 class="modal-title" id="exampleModalLongTitle" aria-hidden="true">Tambah Data Jenis</h3>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			{{-- <form action="{{route('admin.konsumen')}} " method="post" enctype="multipart/form-data"> --}}
			<form action="/konsumen " method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div id="error_add"></div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <input type="text" class="form-control" required="" placeholder="Nama" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Emai </label>
                        <input type="text" class="form-control" required="" placeholder="Email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Password </label>
                                <input type="password" class="form-control" required="" placeholder="Password" name="password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Akses Level </label>
                                <?php $val = old('akses')?>
                                <select type="file" class="form-control" placeholder="Akses Level" name="akses" >
                                    <option value=""{{$val==""?'selected':''}}>Pilih Akses </option>
                                    <option value="admin"{{$val=="admin"?'selected':''}}>Admin </option>
                                    <option value="user"{{$val=="user"?'selected':''}}>user </option>
                                </select>
                            </div>
                        </div>

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


