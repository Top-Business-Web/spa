@extends('front.layouts.master')
@section('content')
    <!--=====================================
                        BREADCRUMB START
                    =====================================-->
    <section class="tf__breadcrumb" style="background: url('{{ asset($settings->banner) }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>{{trans('website.gallery')}}</h1>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i>{{trans('website.Home')}}</a></li>
                                <li><a href="#">{{trans('website.gallery')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                        BREADCRUMB END
                    =====================================-->


    <!--=====================================
                        PHOTO GALLERY START
                    =====================================-->
    <section class="tf__gallery_page mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                @foreach ($gellaries as $gellary)
                    <div class="col-lg-4 col-sm-6 wow fadeInUp gallery-item" data-wow-duration="1s">
                        <div class="tf__gallery_item">
                            <a class="venobox" data-gall="gallery01" href="{{ asset($gellary->image) }}">
                                <img src="{{ asset($gellary->image) }}" alt="gallery1" class="img-fluid w-100">
                                <div class="gal_img_overlay">
                                    <h4>{{ $gellary->title }}</h4>
                                    <p>Duis auteirure dolor in reprehenderit</p>
                                </div>
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="tf__pagination mt-50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item {{ $page > 1 ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ route('galleries', ['page' => $page - 1]) }}"
                                        tabindex="-1">
                                        <i class="fas fa-chevron-double-left"></i>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $numPages; $i++)
                                    <li class="page-item {{ $i == $page ? 'active' : '' }}">
                                        <a class="page-link"
                                            href="{{ route('galleries', ['page' => $i]) }}">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $page < $numPages ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ route('galleries', ['page' => $page + 1]) }}">
                                        <i class="fas fa-chevron-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                        PHOTO GALLERY END
                    =====================================-->
@endsection
