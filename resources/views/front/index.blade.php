@extends('front.layouts.master')
@section('content')
    <!--=====================================
                                                    TOPBAR START
                                                =====================================-->
    @include('front.layouts.top_bar')
    <!--=====================================
                                                    TOPBAR END
                                                =====================================-->


    <!--=====================================
                                                    MENU START
                                                =====================================-->
    @include('front.layouts.navbar')

    <div class="wsus__reservation">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">make an appointment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="wsus__reservation_form">
                            <input class="reservation_input" type="text" placeholder="Name">
                            <input class="reservation_input" type="text" placeholder="Phone">
                            <input class="reservation_input" type="text" placeholder="address">
                            <select class="reservation_input" id="select_js">
                                <option value="">select service</option>
                                <option value="">Facial Therapy</option>
                                <option value="">Candle Message</option>
                                <option value="">Stone Spa</option>
                                <option value="">Body Treatments</option>
                                <option value=""> Aroma Therapy</option>
                            </select>
                            <input class="reservation_input" type="date">
                            <select class="reservation_input" id="select_js2">
                                <option value="">select time</option>
                                <option value="">08.00 am to 09.00 am</option>
                                <option value="">10.00 am to 11.00 am</option>
                                <option value="">12.00 pm to 01.00 pm</option>
                                <option value="">02.00 pm to 03.00 pm</option>
                                <option value="">04.00 pm to 05.00 pm</option>
                            </select>
                            <textarea rows="5" placeholder="Message"></textarea>
                            <button class="common_btn" type="submit">submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                                                    MENU END
                                                =====================================-->


    <!--=====================================
                                                    BANNER START
                                                =====================================-->
    <section class="tf__banner">
        <div class="row banner_slider">
            @foreach ($sliders as $slider)
                <div class="col-12">
                    <div class="tf__single_slider" style="background: url(&quot;{{ asset($slider->image) }}&quot;);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-md-8">
                                    <div class="tf__single_slider_text wow fadeInUp" data-wow-duration="1s">
                                        <h5>welcome To alia beauty lounge</h5>
                                        <h1>{{ $slider->title }} <span>Service!!</span></h1>
                                        <p>{{ $slider->description }}</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                                    href="{{ $slider->url }}">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <span>Intro Video</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--=====================================
                                                    BANNER END
                                                =====================================-->


    <!--=====================================
                                                    FUTURED SERVICES START
                                                =====================================-->
    <section class="tf__futured_services mt_115 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_50 xs_mb_55">
                        <h5>What We're Offering</h5>
                        <h3>For Your Future Services</h3>
                    </div>
                </div>
            </div>
            <div class="row futured_slider wow fadeInUp" data-wow-duration="1s">
                @if ($offers->isEmpty())
                    <div class="col-xl-12">
                        <h1 style="text-align: center; border: 2px solid">NO Offers</h1>
                    </div>
                @else
                    @foreach ($offers as $offer)
                        <div class="col-xl-3">
                            <div class="tf__featured_service_single">
                                <span><i class="fas fa-gift"></i></span>
                                <h3>{{ $offer->title }}</h3>
                                <p>{{ $offer->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--=====================================
                                                    FUTURED SERVICES END
                                                =====================================-->


    <!--=====================================
                                                    ABOUT START
                                                =====================================-->
    <section class="tf__about mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf__section_heading tf__heading_left mb_25">
                                <h5>About Us</h5>
                                <h3>{{ $about_us->top_title }}</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tf__about_text">
                                <div class="tf_about_text_center">
                                    <p>{{ $about_us->top_description }}</p>
                                </div>
                                <a class="common_btn mt_25" href="{{ route('about_us') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__about_img">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/xsnCYCEbdr4">
                            <i class="fas fa-play"></i>
                        </a>
                        <img src="{{ asset($about_us->images[0]) }}" alt="about us" class="img-fluid-100 large_img_1">
                        <img src="{{ asset($about_us->images[1]) }}" alt="about us" class="img-fluid-100 large_img_2">
                        <img src="{{ asset($about_us->images[2]) }}" alt="about us" class="img-fluid-100 large_img_3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                    ABOUT END
                                                =====================================-->


    <!--=====================================
                                                    CATEGORIES START
                                                =====================================-->
    <section class="tf__categories mt_115 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_35">
                        <h5>Top Categories</h5>
                        <h3>Explore Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $index => $category)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_categories">
                            <span>
                                @if ($index === 1)
                                    <img src="{{ asset($category) }}" alt="category" class="img-fluid w-100">
                                @else
                                    <img src="{{ asset('assets/front/images/category_icon_' . ($index + 1) . '.png') }}"
                                        alt="category" class="img-fluid w-100">
                                @endif
                            </span>
                            <h4>{{ $category->title }}</h4>
                            <p>{{ $category->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================
                                                    CATEGORIES END
                                                =====================================-->


    <!--=====================================
                                                    SERVICES START
                                                =====================================-->
    <section class="tf__services mt_115 xs_mt_70" style="background: url('assets/front/images/background_shapes.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_35">
                        <h5>Our Services</h5>
                        <h3>Explore Popular Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categoriesTop as $categoryTop)
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__services_item">
                            <div class="tf__services_img">
                                <img src="{{ $categoryTop->image }}" alt="services" class="img-fluid w-100">
                            </div>
                            <div class="tf__services_text d-flex flex-column justify-content-between">
                                <div>
                                    <a class="title"
                                        href="{{ route('getSingleService', $categoryTop->id) }}">{{ $categoryTop->title }}</a>
                                    <p>{{ $categoryTop->description }}</p>
                                </div>
                                <div class="tf__services_btn_area">
                                    <a class="read_btn" href="{{ route('getSingleService', $categoryTop->id) }}">read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="common_btn" href="{{ route('services') }}">All Services</a>
        </div>
    </section>
    <!--=====================================
                                                    SERVICES END
                                                =====================================-->


    <!--=====================================
                                                    WHY CHOOSE START
                                                =====================================-->
    <section class="tf__why_choose mt_115 xs_mt_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-10 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_25">
                        <h5>Why Choose Us</h5>
                        <h3>Why You Choose alia beauty lounge</h3>
                    </div>
                    <div class="tf__why_choose_text">
                        <p>Excepteur sint occaecat cupidatat non proident,sunt inculpk qui officia deserunt mollit anim
                            id est laborum.sed do eiusmod.</p>
                        <ul>
                            <li>
                                <h4>Qualified Staff</h4>
                            </li>
                            <li>
                                <h4>Relax Zones</h4>
                            </li>
                            <li>
                                <h4>Variety Of Care</h4>
                            </li>
                            <li>
                                <h4>Herbal Product</h4>
                            </li>
                        </ul>
                        <a class="common_btn mt_25" href="{{ route('services') }}">read more</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-sm-8 col-md-8 col-xxl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__why_choose_img">
                        <div class="large_img">
                            <img src="{{ asset('assets/front') }}/images/why_choose_img_1.jpg" alt="why choose"
                                class="img-fluid w-100">
                        </div>
                        <div class="small_img">
                            <img src="{{ asset('assets/front') }}/images/why_choose_img_2.jpg" alt="why choose"
                                class="img-fluid w-100">
                        </div>
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/xsnCYCEbdr4">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                    WHY CHOOSE END
                                                =====================================-->


    <!--=====================================
                                                    WORK START
                                                =====================================-->
    <section class="tf__work mt_115 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_85 xs_mb_30">
                        <h5>3 Easy Step</h5>
                        <h3>How It works?</h3>
                    </div>
                </div>
            </div>
            <div class="tf__work_text_area">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__work_single first">
                            <h4>Meeting</h4>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__work_single second">
                            <h4>Treatment</h4>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__work_single third">
                            <h4>Finalizing</h4>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                    WORK END
                                                =====================================-->

    <!--=====================================
                                                    TESTIMONIAL START
                                                =====================================-->

    <section class="tf__testimonial mt_115 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_35">
                        <h5>our testimonial</h5>
                        <h3>What Our Clients Says</h3>
                    </div>
                </div>
            </div>
            <div class="row testi_slider wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-4">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{ asset('assets/front') }}/images/client_1.jpg" alt="client"
                                class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="cliect_comment">
                                Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit
                            </p>
                            <h3 class="title">Courtney Henry</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{ asset('assets/front') }}/images/client_2.jpg" alt="client"
                                class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="cliect_comment">
                                Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit
                            </p>
                            <h3 class="title">Rishmika Lane</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{ asset('assets/front') }}/images/client_3.jpg" alt="client"
                                class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="cliect_comment">
                                Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit
                            </p>
                            <h3 class="title">Letitia Shelton</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="{{ asset('assets/front') }}/images/client_2.jpg" alt="client"
                                class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="cliect_comment">
                                Duis aute irure dolor in reprehenderit into volupjl
                                tate velit esse cillum dolore eu fugiat nulla partr
                                iatur sunt in culp qui officia deserunt mollit
                            </p>
                            <h3 class="title">Rishmika Lane</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================
                                                    TESTIMONIAL END
                                                =====================================-->

    <!--=========================
                                                    SCROLL BUTTON START
                                                ===========================-->
    <div class="tf__scroll_btn">
        <span><i class="fas fa-arrow-alt-up"></i></span>
    </div>
    <!--==========================
                                                    SCROLL BUTTON END
                                                ===========================-->
@endsection
