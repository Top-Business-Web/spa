<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data"
        action="{{ route('services.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Tilte :</label>
                    <input type="text" class="form-control" name="title" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="addButton">Add</button>
            </div>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>
