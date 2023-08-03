<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data"
        action="{{ route('reviews.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" name="name" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" name="email" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="page_id">Page :</label>
                    <select name="page_id" class="form-control">
                        @foreach ($pages as $page)
                            <option value="{{ $page->id }}" style="text-align: center">{{ $page->top_title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="page_id">Rate :</label>
                    <input type="number" name="rate" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description :</label>
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
