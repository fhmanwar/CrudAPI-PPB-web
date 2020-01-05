<button type="button" class="btn btn-outline-warning btn-sm btn-circle" style="margin-right:5px;" data-toggle="modal" data-target="#update{{$row->id}}">
    <i class="fas fa-cogs"></i>
</button>

<!-- Modal update -->
<div class="modal fade" id="update{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Data Konsumen</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            {{-- <form action="{{ route('admin.konsumen',$row->id) }} " method="post" enctype="multipart/form-data"> --}}
            <form action="/konsumen/{{$row->id}} " method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div id="error_update"></div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <div class="col-md-12">
                            <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama" value="{{ $row->name }}" >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email </label>
                        <div class="col-md-12">
                            <input name="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" value="{{ $row->email }}" >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Password</label>
                                <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" >
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="from-text text-muted"><small>Kosongkan apabila tidak diubah</small></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Akses</label>
                                <select name="akses" class="form-control @error('akses') is-invalid @enderror" placeholder="Akses Level" value="{{ $row->akses }}" required>
                                    <option value=""{{$row->akses==""?'selected':''}}>Pilih Akses </option>
                                    <option value="admin"{{$row->akses=="admin"?'selected':''}}>Admin </option>
                                    <option value="user"{{$row->akses=="user"?'selected':''}}>user </option>
                                </select>
                                @error('akses')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

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
