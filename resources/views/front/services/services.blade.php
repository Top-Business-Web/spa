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
                            <h1>our services</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">services</a></li>
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
        SERVICES PAGE START
    =====================================-->
    <section class="tf__services_page mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_35 text-center">
                        <h5>Our Services</h5>
                        <h3 class="text-center">Explore Popular Services</h3>
                    </div>
                </div>
            </div>
            <ul class="services-list list-unstyled d-flex justify-content-center mb-3 mt-4">
                <li data-list=".spa" class="active">SPA</li>
                <li data-list=".salon">SALON</li>
              </ul>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp salon" data-wow-duration="1s">
                    <div class="tf__services_item">
                        <div class="tf__services_img">
                            <img src="{{ asset('assets/front') }}/images/service_img_1.jpg" alt="services" class="img-fluid w-100">
                        </div>
                        <div class="tf__services_text d-flex flex-column justify-content-between">
                            <div>
                                <a class="title" href="service_details.html">Massage</a>
                            <p>Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit</p>
                            </div>
                            <div class="tf__services_btn_area">
                                <a class="read_btn" href="service_details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp spa" data-wow-duration="1s">
                    <div class="tf__services_item">
                        <div class="tf__services_img">
                            <img src="{{ asset('assets/front') }}/images/service_img_2.jpg" alt="services" class="img-fluid w-100">
                        </div>
                        <div class="tf__services_text d-flex flex-column justify-content-between">
                            <div>
                                <a class="title" href="service_details.html">Candle Message </a>
                            <p>Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit</p>
                            </div>
                            <div class="tf__services_btn_area">
                                <a class="read_btn" href="service_details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp spa" data-wow-duration="1s">
                    <div class="tf__services_item">
                        <div class="tf__services_img">
                            <img src="{{ asset('assets/front') }}/images/service_img_3.jpg" alt="services" class="img-fluid w-100">
                        </div>
                        <div class="tf__services_text d-flex flex-column justify-content-between">
                            <div>
                                <a class="title" href="service_details.html">Stone Spa </a>
                            <p>Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit</p>
                            </div>
                            <div class="tf__services_btn_area">
                                <a class="read_btn" href="service_details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp spa" data-wow-duration="1s">
                    <div class="tf__services_item">
                        <div class="tf__services_img">
                            <img src="{{ asset('assets/front') }}/images/service_img_4.jpg" alt="services" class="img-fluid w-100">
                        </div>
                        <div class="tf__services_text d-flex flex-column justify-content-between">
                            <div>
                                <a class="title" href="service_details.html">Body Treatments</a>
                            <p>Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit</p>
                            </div>
                            <div class="tf__services_btn_area">
                                <a class="read_btn" href="service_details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp salon" data-wow-duration="1s">
                    <div class="tf__services_item">
                        <div class="tf__services_img">
                            <img src="{{ asset('assets/front') }}/images/service_img_5.jpg" alt="services" class="img-fluid w-100">
                        </div>
                        <div class="tf__services_text d-flex flex-column justify-content-between">
                            <div>
                                <a class="title" href="service_details.html">Aroma Therapy</a>
                            <p>Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit</p>
                            </div>
                            <div class="tf__services_btn_area">
                                <a class="read_btn" href="service_details.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp spa" data-wow-duration="1s">
                    <div class="tf__services_item">
                        <div class="tf__services_img">
                            <img src="{{ asset('assets/front') }}/images/service_img_6.jpg" alt="services" class="img-fluid w-100">
                        </div>
                        <div class="tf__services_text d-flex flex-column justify-content-between">
                            <div>
                                <a class="title" href="service_details.html">Sauna Relax</a>
                            <p>Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit</p>
                            </div>
                            <div class="tf__services_btn_area">
                                <a class="read_btn" href="service_details.html">read more</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        SERVICES PAGE END
    =====================================-->

@endsection
