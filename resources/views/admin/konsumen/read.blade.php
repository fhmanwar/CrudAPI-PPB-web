
<button type="button" class="btn btn-outline-info btn-sm btn-circle" style="margin-right:5px;" data-toggle="modal" data-target="#read{{$row->id}}">
    <i class="fas fa-info"></i>
</button>

<!-- Modal Detail -->
<div class="modal fade" id="read{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Detail : {{$row->name}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>Nama </th>
                                <td>: {{$row->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{$row->email}}</td>
                            </tr>
                            <tr>
                                <th>Akses Level</th>
                                <td>: {{$row->akses}}</td>
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
