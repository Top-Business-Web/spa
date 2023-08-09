@extends('front.layouts.master')
@section('content')

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
        BREADCRUMB START
    =====================================-->
    <section class="tf__breadcrumb" style="background: url('{{ asset($settings->banner) }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>About Us</h1>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">about us</a></li>
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
        ABOUT US START
    =====================================-->
    <section class="about_page">
        <div class="tf__about_page_welcome mt_120 xs_mt_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_welcome_img">
                            <img src="{{ asset(@$about_us->images[3]) }}" alt="welcome" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_welcome_text">
                            <h2>{{ $about_us->top_title }}</h2>
                            <p>{{ $about_us->top_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tf__about_page_about mt_120 xs_mt_70">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-10 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_about_img">
                            <div class="img_1">
                                <img src="{{ asset(@$about_us->images[4]) }}" alt="about" class="img-fluid w-100">
                            </div>
                            <div class="img_2">
                                <img src="{{ asset(@$about_us->images[5]) }}" alt="about" class="img-fluid w-100">
                            </div>
                            <p>{{ $about_us->year }}+
                                <span>Years Of Experience</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_about_text_area">
                            <div class="tf__section_heading tf__heading_left mb_25">
                                <h5>About Us</h5>
                                <h3>{{ $about_us->down_title }}</h3>
                            </div>
                            <div class="tf__about_page_about_text">
                                <p>{{ $about_us->down_description }}</p>
                                <ul>
                                    <li>
                                        <h3>Skin & Body Care</h3>
                                        <p>Nemo enim ipsam voluptatem into quia voluptas sit enim into Nemo enim ipsam
                                            voluptatem into quia voluptas sit enim into.</p>
                                    </li>
                                    <li>
                                        <h3>Spa Massage Therapy</h3>
                                        <p>Nemo enim ipsam voluptatem into quia voluptas sit enim into Nemo enim ipsam
                                            voluptatem into quia voluptas sit enim into.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        ABOUT US END
    =====================================-->


@endsection
