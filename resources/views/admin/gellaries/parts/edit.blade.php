<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data"
        action="{{ route('gellaries.update', $gellary->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="form-control-label">Image</label>
                    <input type="file" id="testDrop" class="dropify" name="image"
                        data-default-file="{{ asset('uploads/admins/galleries/' . $gellary->image) }}" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Tilte :</label>
                    <input type="text" class="form-control" value="{{ $gellary->title }}" name="title" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="addButton">Update</button>
            </div>
        </div>
    </form>
</div>
<script>
    $('.dropify').dropify()
</script>
