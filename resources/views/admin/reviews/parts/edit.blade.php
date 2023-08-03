<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('reviews.update', $review->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $review->id }}" name="id">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" value="{{ $review->name }}" class="form-control" name="name" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" value="{{ $review->email }}" class="form-control" name="email" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="page_id">Page :</label>
                    <select name="page_id" class="form-control">
                        @foreach ($pages as $page)
                            <option value="{{ $page->id }}" style="text-align: center" {{ $review->page_id == $page->id ? 'selected' : '' }}>{{ $page->top_title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="page_id">Rate :</label>
                    <input type="number" value="{{ $review->rate }}" name="rate" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" rows="8" class="form-control">{{ $review->rate }}</textarea>
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
