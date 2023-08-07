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
                            <h1>contact us</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">contact us</a></li>
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
            CONTACT US START
        =====================================-->
    <section class="tf__contact mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <h3>Our Location</h3>
                        <p>{{ $settings->address }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-envelope"></i></span>
                        <h3>Email Us</h3>
                        <a href="mailto:support@yourdomain.com">{{ $settings->email }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <h3>Call Us</h3>
                        <a href="callto:{{ $settings->phone }}"> {{ $settings->phone }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-clock"></i></span>
                        <h3>Working Hours</h3>
                        <p>Satrday to Friday :</p>
                        <p>{{ $settings->work_hours }}</p>
                    </div>
                </div>
            </div>
            <div class="row mt_120 xs_mt_70">
                <div class="col-xl-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.61185042534!2d31.176062177288465!3d30.059611343358817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1689494480215!5m2!1sen!2seg"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <form class="tf__contact_form">
                        <h2>Do You have Any Questions?</h2>
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="Your Phone">
                            </div>
                            <div class="col-xl-6">
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="col-xl-12">
                                <textarea rows="7" placeholder="Write something Here"></textarea>
                                <button type="submit" class="common_btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
            CONTACT US END
        =====================================-->
@endsection
