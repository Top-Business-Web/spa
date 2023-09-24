@extends('front.layouts.master')
@section('content')

    <div class="wsus__reservation">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{trans('website.make an appointment')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="wsus__reservation_form">
                            <input class="reservation_input" type="text" placeholder="{{trans('website.name')}}">
                            <input class="reservation_input" type="text" placeholder="{{trans('website.phone')}}">
                            <input class="reservation_input" type="text" placeholder="{{trans('website.address')}}">
                            <select class="reservation_input" id="select_js">
                                <option value="">{{trans('website.select service')}}</option>
                                <option value="">Facial Therapy</option>
                                <option value="">Candle Message</option>
                                <option value="">Stone Spa</option>
                                <option value="">Body Treatments</option>
                                <option value=""> Aroma Therapy</option>
                            </select>


                            <input class="reservation_input" type="date">


                            <select class="reservation_input" id="select_js2">
                                <option value="">{{trans('website.select time')}}</option>
                                <option value="">08.00 am to 09.00 am</option>
                                <option value="">10.00 am to 11.00 am</option>
                                <option value="">12.00 pm to 01.00 pm</option>
                                <option value="">02.00 pm to 03.00 pm</option>
                                <option value="">04.00 pm to 05.00 pm</option>
                            </select>
                            <textarea rows="5" placeholder="{{trans('website.message')}}"></textarea>
                            <button class="common_btn" type="submit">{{trans('website.submit now')}}</button>
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
                            <h1>{{trans('website.about us')}}</h1>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> {{trans('website.Home')}}</a></li>
                                <li><a href="#">{{trans('website.about us')}}</a></li>
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
                            <img src="{{ asset($about_us->top_image) }}" alt="welcome" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_welcome_text">
                            <h2>{{ lang() == 'ar' ? $about_us->top_title_ar :$about_us->top_title }}</h2>
                            <p>{!! lang() == 'ar' ? $about_us->top_description_ar :$about_us->top_description !!}</p>
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
                                <img src="{{ asset(@$about_us->images[0]) }}" alt="about" class="img-fluid w-100">
                            </div>
                            <div class="img_2">
                                <img src="{{ asset(@$about_us->images[1]) }}" alt="about" class="img-fluid w-100">
                            </div>
                            <p>{{ $about_us->year }}+
                                <span>{{trans('website.Years Of Experience')}}</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_about_text_area">
                            <div class="tf__section_heading tf__heading_left mb_25">
                                <h5>{{trans('website.about us')}}</h5>
                                <h3>{!! lang() == 'ar' ? $about_us->down_title_ar :$about_us->down_title !!}</h3>
                            </div>
                            <div class="tf__about_page_about_text">
                                <p>{!! lang() == 'ar' ? $about_us->down_description_ar :$about_us->down_description !!}</p>
                                <ul>
                                    <li>
                                        <h3> {{trans('website.h3_1')}}</h3>
                                        <p>{{trans('website.p_1')}}</p>
                                    </li>
                                    <li>
                                        <h3>{{trans('website.h3_2')}}</h3>
                                        <p>{{trans('website.p_2')}}</p>
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
