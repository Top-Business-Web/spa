@extends('admin/layouts/master')

@section('title')
    {{ $setting->title ?? '' }} | Settings
@endsection
@section('page_name')
    Settings
@endsection
@section('content')
    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data"
        action="{{ route('settings.update', $settings->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $settings->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">Settings</h3>
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Logo :</label>
                                <input type="file" class="dropify" name="logo" multiple
                                    data-default-file="{{ asset($settings->logo) }}"
                                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                <span class="form-text text-danger text-center">Only the following formats are allowed: png,
                                    gif, jpeg,
                                    jpg,webp</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Banner :</label>
                                <input type="file" class="dropify" name="banner" multiple
                                    data-default-file="{{ asset($settings->banner) }}"
                                    accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                                <span class="form-text text-danger text-center">Only the following formats are allowed: png,
                                    gif, jpeg,
                                    jpg,webp</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title :</label>
                                <input type="text" name="title" value="{{ $settings->title }}" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title AR :</label>
                                <input type="text" name="title_ar" value="{{ $settings->title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone :</label>
                                <input type="text" name="phone" value="{{ $settings->phone }}" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="year">Email :</label>
                                <input type="email" name="email" value="{{ $settings->email }}" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">Address :</label>
                                <input type="text" name="address" value="{{ $settings->address }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">Address AR :</label>
                                <input type="text" name="address_ar" value="{{ $settings->address_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_ar">Work Hours :</label>
                                <input type="text" name="work_hours" value="{{ $settings->work_hours }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_en">Map :</label>
                                <input name="map" class="form-control" value="{{ $settings->work_hours }}" />
                            </div>
                        </div>
                    </div>
                    <h3>Social Media</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                @foreach ($settings['social_links'] as $key => $value)
                                    <label for="{{ $key }}">{{ $key }} :</label>
                                    <input type="text" name="social_links[{{ $key }}]" class="form-control"
                                        value="{{ $value }}" />
                                @endforeach
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
    </script>
@endsection
