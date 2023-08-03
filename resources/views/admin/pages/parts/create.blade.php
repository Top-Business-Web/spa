<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data"
        action="{{ route('pages.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="top_title">Top Tilte :</label>
                    <input type="text" class="form-control" name="top_title" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="down_title">Down Tilte :</label>
                    <input type="text" class="form-control" name="down_title" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="category_id">Category :</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" style="text-align: center">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="top_description">Top Description :</label>
                    <textarea name="top_description" rows="8" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="down_description">Down Description :</label>
                    <textarea name="down_description" rows="8" class="form-control"></textarea>
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
