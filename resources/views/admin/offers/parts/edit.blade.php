<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('offers.update', $offer->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tilte :</label>
                    <input type="text" value="{{ $offer->title }}" class="form-control" name="title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tilte AR :</label>
                    <input type="text" value="{{ $offer->title_ar }}" class="form-control" name="title_ar" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" class="form-control" rows="8">{{ $offer->description }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description AR :</label>
                    <textarea name="description_ar" class="form-control" rows="8">{{ $offer->description_ar }}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="addButton">Update</button>
        </div>
    </form>
</div>
<script>
    $('.dropify').dropify()
</script>
