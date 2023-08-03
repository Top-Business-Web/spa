<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data"
        action="{{ route('categories.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Image :</label>
                    <input type="file" class="dropify" name="image"
                        data-default-file="{{ asset('assets/uploads/avatar.png') }}"
                        accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                    <span class="form-text text-danger text-center">Only the following formats are allowed : png, gif,
                        jpeg, jpg,webp</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tilte :</label>
                    <input type="text" class="form-control" name="title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Service :</label>
                    <select name="service_id" class="form-control">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="view">View :</label>
                    <input type="number" class="form-control" name="view" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Top :</label>
                    <input type="number" class="form-control" name="top" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Description :</label>
                    <textarea name="description" rows="8" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="addButton">Add</button>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>
