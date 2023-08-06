@extends('front.layouts.master')
@section('content')


    <!--=====================================
        BREADCRUMB START
    =====================================-->
    <section class="tf__breadcrumb" style="background: url('assets/front/images/breadcrumb_bg.jpg');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>photo gallery</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
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
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_1.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_1.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_2.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_2.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_3.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_3.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_4.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_4.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item first">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_5.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_5.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_1.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_1.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_8.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_8.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_7.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_7.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_item">
                        <a class="venobox" data-gall="gallery01" href="{{ asset('assets/front') }}/images/gallery_img_6.jpg">
                            <img src="{{ asset('assets/front') }}/images/gallery_img_6.jpg" alt="gallery1" class="img-fluid w-100">
                            <div class="gal_img_overlay">
                                <h4>Faciale Massage</h4>
                                <p>Duis auteirure dolor in reprehenderit</p>
                            </div>
                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tf__pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-double-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">01</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">02</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">03</a>
                                </li>
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
