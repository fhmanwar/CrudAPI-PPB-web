<button type="button" class="btn btn-outline-danger btn-sm btn-circle" style="margin-right:5px;" data-toggle="modal" data-target="#del{{ $row->id }}">
    <i class="fas fa-trash-alt"></i>
</button>

<div class="modal fade" id="del{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Delete Data {{ $row->nm_brg }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                <p class="alert alert-warning">Are you sure want to delete this data?</p>
            </div>
            <div class="modal-footer">
                <form action="/barang/{{ $row->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-trash-alt"></i> Yes. Delete this Data</button>
                </form>
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            </div>
            <?php //echo form_close(); ?>
        </div>
    </div>
</div>
