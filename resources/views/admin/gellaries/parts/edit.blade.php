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
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tilte :</label>
                    <input type="text" value="{{ $gellary->title }}" class="form-control" name="title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tilte AR:</label>
                    <input type="text" value="{{ $gellary->title_ar }}" class="form-control" name="title_ar" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
            </div>
        </div>
    </form>
</div>
<script>
    $('.dropify').dropify()
</script>
