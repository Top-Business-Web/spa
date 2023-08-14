@extends('admin/layouts/master')
@section('title')
    {{ 'الصفحة الرئيسية' }} | لوحة التحكم
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $adminsCount }}</h2>
                            <a class="text-d-n" href="{{ route('admins.index') }}">
                                <p class="text-white mb-0">Admins</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fe fe-users text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-secondary img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $contactsCount }}</h2>
                            <a class="text-d-n" href="{{ route('contacts.index') }}">
                                <p class="text-white mb-0">Contacts</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fa fa-address-book text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $galleriesCount }}</h2>
                            <a class="text-d-n" href="{{ route('gellaries.index') }}">
                                <p class="text-white mb-0">Galleries</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fa fa-image text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $servicesCount }}</h2>
                            <a class="text-d-n" href="{{ route('services.index') }}">
                                <p class="text-white mb-0">Services</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fa fa-server text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-dark img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $categoriesCount }}</h2>
                            <a class="text-d-n" href="{{ route('categories.index') }}">
                                <p class="text-white mb-0">Category</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fa fa-list text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-info img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $pagesCount }}</h2>
                            <a class="text-d-n" href="{{ route('pages.index') }}">
                                <p class="text-white mb-0">Pages</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fa fa-copy text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-warning img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $reviewsCount }}</h2>
                            <a class="text-d-n" href="{{ route('reviews.index') }}">
                                <p class="text-white mb-0">Reviews</p>
                            </a>
                        </div>
                        <div class="mr-auto">
                            <i class="fa fa-eye text-white fs-30 ml-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
@endsection
