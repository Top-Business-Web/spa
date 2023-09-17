@extends('front.layouts.master')
@section('content')
    <!--=====================================
                    BREADCRUMB START
                =====================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <section class="tf__breadcrumb" style="background: url('{{ asset($settings->banner) }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>{{trans('website.contact')}}</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> {{trans('website.Home')}}</a></li>
                                <li><a href="#">{{trans('website.contact')}}</a></li>
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
                        <h3>{{trans('website.Our Location')}}</h3>
                        <p>{{ $settings->address }}</p>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-envelope"></i></span>
                        <h3>{{trans('website.Email Us')}}</h3>
                        <a href="mailto:support@yourdomain.com">{{ $settings->email }}</a>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <h3>{{trans('website.Call Us')}}</h3>
                        <a href="callto:{{ $settings->phone }}"> {{ $settings->phone }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info" style="height: 215px;">
                        <span><i class="fas fa-clock"></i></span>
                        <h3>{{trans('website.Working Hours')}}</h3>
                        <p>{{trans('website.Satrday to Friday')}} :</p>
                        <p>{{ $settings->work_hours }}</p>
                </div>
            </div>
            <!-- vendor -->
            <div class="row mt_120 xs_mt_70">
                <div class="col-xl-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_map">
                        <iframe
                            src="{{ $settings->map }}"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <form class="tf__contact_form contactForm" id="contactForm">
                        <h2>{{trans('website.Do You have Any Questions?')}}</h2>
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" name="name" placeholder="{{trans('website.name')}}" required>
                            </div>
                            <div class="col-xl-6">
                                <input type="email" name="email" placeholder="{{trans('website.email')}}" required>
                            </div>
                            <div class="col-xl-6">
                                <input type="text" name="phone" placeholder="{{trans('website.phone')}}" required>
                            </div>
                            <div class="col-xl-6">
                                <input type="text" name="subject" placeholder="{{trans('website.subject')}}" required>
                            </div>
                            <div class="col-xl-12">
                                <textarea rows="7" name="description" placeholder="{{trans('website.description')}}" required></textarea>
                                <button type="button" class="common_btn">{{trans('website.Send Message')}}</button>
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
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function(e) {
        $(document).on('click', '.common_btn', function() {
            var formData = new FormData(document.getElementById("contactForm"));
            formData.append('_token', "{{ csrf_token() }}"); // Add CSRF token
            $.ajax({
                method: 'POST',
                data: formData,
                url: "{{ route('contact.store') }}",
                beforeSend: function() {
                    $('.load-contact').html('Loading ... ');
                },
                success: function(data) {
                    if (data.status === 200) {
                        toastr.success('Message sent successfully');
                        $('#contactForm input, #contactForm textarea').val('');
                        $('.load-contact').html('');
                    }
                },
                error: function(data) {
                    if (data.status === 500) {
                        toastr.error('Error sending message');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function(key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function(key, value) {
                                    toastr.error('' + value);
                                });
                            }
                        });
                        $('.load-contact').html('Error');
                    }
                },
                cache: false,
                processData: false,
                contentType: false
            });
        });
    });
</script>
@endsection
