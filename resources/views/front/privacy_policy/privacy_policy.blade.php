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
                            <h1>{{trans('website.Privacy Policy')}}</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i>{{trans('website.Home')}}</a></li>
                                <li><a href="#">{{trans('website.Privacy Policy')}}</a></li>
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
        PRIVACY POLICY START
    =====================================-->
    <section class="tf__privacy_policy mt_85 xs_mt_35">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__terms_condition_text">
                        <h3> {{trans('website.Information Collection')}}</h3>
                        <p>{{trans('website.information_collection_text_one')}}</p>

                        <p>{{trans('website.information_collection_text_two')}}</p>


                        <h3>{{trans('website.How We Use Cookies')}}</h3>


                        <p> {{trans('website.how_we_use_cookies_text_paragraph')}}</p>
                        <ul>

                            <li>{{trans('website.how_we_use_cookies_text_text_one')}}</li>
                            <li>{{trans('website.how_we_use_cookies_text_text_two')}}</li>
                            <li>{{trans('website.how_we_use_cookies_text_text_three')}}</li>
                            <li>{{trans('website.how_we_use_cookies_text_text_four')}}</li>
                        </ul>


                        <h3>{{trans('website.collection_process')}}</h3>
                        <p>{{trans('website.collection_process_paragraph_one')}}</p>

                        <p>{{trans('website.collection_process_paragraph_two')}}</p>

                        <p>{{trans('website.collection_process_paragraph_three')}}</p>



                        <h3>{{trans('website.Data Protection')}}</h3>

                        <p>{{trans('website.data_protection_paragraph')}}</p>

                        <ul>
                            <li>{{trans('website.data_protection_text_one')}}</li>
                            <li>{{trans('website.data_protection_text_two')}}</li>
                            <li>{{trans('website.data_protection_text_three')}}</li>
                            <li>{{trans('website.data_protection_text_four')}}</li>
                            <li>{{trans('website.data_protection_text_five')}}</li>
                            <li>{{trans('website.data_protection_text_six')}}</li>
                        </ul>


                        <p>{{trans('website.website.data_protection_end_paragraph')}}    </p>



                        <h3>{{trans('website.Our Policy For Age Under 18')}}</h3>


                        <p>{{trans('website.our_policy_paragraph_one')}}</p>


                        <p>{{trans('website.our_policy_paragraph_two')}}</p>


                        <p>{{trans('website.our_policy_paragraph_three')}}.</p>



                        <h3>{{trans('website.Accounts')}}</h3>

                        <p>{{trans('website.accounts_paragraph_one')}}</p>

                        <p>{{trans('website.accounts_paragraph_two')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        PRIVACY POLICY END
    =====================================-->

    @endsection
