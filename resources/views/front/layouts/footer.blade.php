<footer class="tf__footer mt_180 xs_mt_130" style="padding-top:20px;background: url({{ asset('assets/front/images/footer_bg.jpg') }});">
    <div class="container">

        <div class="row mt_20 xs_mt_10 pb_80 xs_pb_35 md_padding justify-content-between">
            <div class="col-xl-3 col-md-6 col-lg-4">
                <div class="tf__footer_logo_area">
                    <a class="footer_logo" href="{{ route('home') }}">
                        <img src="{{ asset('assets/front') }}/images/footer_logo.png" alt="alia"
                            class="img-fluid w-100">
                    </a>
                    <ul class="d-flex flex-wrap mt-4">
                        <li><a href="{{ $settings->social_links['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{ $settings->social_links['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li><a href="{{ $settings->social_links['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $settings->social_links['pinterest'] }}"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li><a href="{{ $settings->social_links['behance'] }}"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2">
                <div class="tf__footer_link">
                    <h4>{{trans('website.Our Services')}}</h4>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="{{ route('getSingleService', $category->id) }}">{{ lang() == 'ar' ? $category->title_ar : $category->title  }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2 order-md-4">
                <div class="tf__footer_link">
                    <h4>{{trans('website.Useful Link')}}</h4>
                    <ul>
                        <li><a href="{{ route('faqs') }}">{{trans('website.FAQs')}}</a></li>
                        <li><a href="{{ route('privacy_policy') }}">{{trans('website.Privacy Policy')}}</a></li>
                        <li><a href="{{ route('terms_condition') }}">{{trans('website.terms condition')}}</a></li>
                        <!-- <li><a href="testimonial.html">testimonial</a></li> -->
                        <li><a href="{{ route('contacts') }}">{{trans('website.Contact')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 order-lg-4">
                <div class="tf__footer_link">
                    <h4>{{trans('website.Contact Us')}}</h4>
                    <p><i class="fas fa-phone-alt"></i>{{ $settings->phone }}</p>
                    <p><i class="fas fa-envelope"></i> {{ $settings->email }}</p>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $settings->address }}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tf__footer_copyright">
                    <p>{{trans('website.Copyright')}} © <a href="https://topbusiness.io">Top business</a> 2023. {{trans('website.All Rights Reserved')}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=========================
        SCROLL BUTTON START
    ===========================-->
<div class="tf__scroll_btn">
    <span><i class="fas fa-arrow-alt-up"></i></span>
</div>
<!--==========================
        SCROLL BUTTON END
    ===========================-->
