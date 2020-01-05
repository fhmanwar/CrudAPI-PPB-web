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
            <form action="/anggrek/{{ $row->id }} " method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div id="error_update"></div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Anggrek</label>
                        <div class="col-md-12">
                            <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Nama Anggrek" value="{{ $row->name }}" >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Harga</label>
                                <input name="price" class="form-control @error('price') is-invalid @enderror" type="text" placeholder="Harga" value="{{ $row->price }}" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Image</label>
                                <input type="file" class="form-control" name="image" value="{{ $row->image }}">
                                @if ($row->image != "")
                                    {{-- <img src="{{ asset('image/upload/anggrek/'.$row->image) }}" class="img img-thumbnail" width="60"> --}}
                                    <img src="{{ asset($row->image) }}" class="img img-thumbnail" width="60">
                                @else
                                    {{ 'Tidak ada' }}
                                @endif
                                <input type="hidden" name="hidden_image" value="{{ $row->image }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Deskripsi</label>
                        <textarea class="form-control" rows="3" placeholder="Deskripsi" name="desc">{{ $row->desc }}</textarea>
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
