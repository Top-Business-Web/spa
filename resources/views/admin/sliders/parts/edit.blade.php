<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('sliders.update', $slider->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $slider->id }}" name="id">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Image :</label>
                    <input type="file" class="dropify" name="image"
                        data-default-file="{{ asset($slider->image) }}"
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
                    <input type="text" value="{{ $slider->title }}" class="form-control" name="title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tilte AR :</label>
                    <input type="text" value="{{ $slider->title_ar }}" class="form-control" name="title_ar" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Url :</label>
                    <input type="text" value="{{ $slider->url }}" class="form-control" name="url" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Description :</label>
                    <textarea name="description" rows="8" class="form-control">{{ $slider->description }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Description AR :</label>
                    <textarea name="description_ar" rows="8" class="form-control">{{ $slider->description_ar }}</textarea>
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
