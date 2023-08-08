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
                            <h1>photo gallery</h1>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">gallery</a></li>
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
    @foreach ($gellaries as $index => $gellary)
        <div class="col-lg-4 col-sm-6 wow fadeInUp gallery-item {{ $index >= 9 ? 'hidden' : '' }}" data-wow-duration="1s">
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
            <div class="tf__pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-double-left"></i></a>
                                </li>
                                @php
                                    $numPages = ceil(count($gellaries) / 9);
                                @endphp
                                @for ($i = 1; $i <= $numPages; $i++)
                                    <li class="page-item">
                                        <a class="page-link" href="#">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</a>
                                    </li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-double-right"></i></a>
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
