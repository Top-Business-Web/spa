@extends('Admin/layouts/master')

@section('title')
    {{ $setting->title ?? '' }} | About Us
@endsection
@section('page_name')
    About Us
@endsection
@section('content')
    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data"
        action="{{ route('about_us.update', $about_us->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $about_us->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">About Us</h3>
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Images</label>
                                <input type="file" class="dropify" name="images[]" multiple="multiple"
                                    data-default-file="{{ asset($about_us->images[0]) }}"
                                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                <span class="form-text text-danger text-center">Only the following formats are allowed: png,
                                    gif, jpeg,
                                    jpg,webp</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="top_title">Top Title :</label>
                                <input type="text" name="top_title" value="{{ $about_us->top_title }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="down_title">Down Title :</label>
                                <input type="text" name="down_title" value="{{ $about_us->down_title }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="year">Year :</label>
                                <input type="text" name="year" value="{{ $about_us->year }}" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_ar">Top Description :</label>
                                <textarea name="top_description" rows="8" class="form-control ckeditor">{!! $about_us->top_description !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_en">Down Description :</label>
                                <textarea name="down_description" rows="8" class="form-control ckeditor">{!! $about_us->down_description !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        editScript();
        document.querySelectorAll('.ckeditor').forEach((textarea) => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
