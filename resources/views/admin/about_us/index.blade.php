@extends('admin/layouts/master')

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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Images</label>
                                <input type="file" class="dropify" name="images[]" multiple="multiple"
                                    data-default-file="{{ asset($about_us->images[0]) }}"
                                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                <span class="form-text text-danger text-center">
                                    You are required to include a minimum of two images in any of the following formats.
                                    images will be shown on the "About Us" page, all in JPG format.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Top Image</label>
                                <input type="file" class="dropify" name="top_image"
                                    data-default-file="{{ asset($about_us->top_image) }}"
                                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="top_title_ar">Top Title AR :</label>
                                <input type="text" name="top_title_ar" value="{{ $about_us->top_title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="top_title">Top Title :</label>
                                <input type="text" name="top_title" value="{{ $about_us->top_title }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="down_title">Down Title AR :</label>
                                <input type="text" name="down_title_ar" value="{{ $about_us->down_title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="down_title">Down Title :</label>
                                <input type="text" name="down_title" value="{{ $about_us->down_title }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                                <label for="desc_ar">Top Description AR:</label>
                                <textarea name="top_description_ar" rows="8" class="form-control ckeditor">{!! $about_us->top_description_ar !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_en">Down Description :</label>
                                <textarea name="down_description" rows="8" class="form-control ckeditor">{!! $about_us->down_description !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_en">Down Description AR :</label>
                                <textarea name="down_description_ar" rows="8" class="form-control ckeditor">{!! $about_us->down_description_ar !!}</textarea>
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
    @include('admin/layouts/myAjaxHelper')
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
