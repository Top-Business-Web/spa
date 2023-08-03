<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data"
        action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $category->id }}" name="id">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Image :</label>
                    <input type="file" class="dropify" name="image"
                        data-default-file="{{ asset($category->image) }}"
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
                    <input type="text" value="{{ $category->title }}" class="form-control" name="title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Service :</label>
                    <select name="service_id" class="form-control">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}"
                                {{ $category->service_id == $service->id ? 'selected' : '' }}>{{ $service->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="view">View :</label>
                    <input type="number" value="{{ $category->view }}" class="form-control" name="view" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Top :</label>
                    <input type="number" value="{{ $category->top }}" class="form-control" name="top" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Description :</label>
                    <textarea name="description" rows="8" class="form-control">{{ $category->description }}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
        </div>
    </form>
</div>
<script>
    $('.dropify').dropify()
</script>
