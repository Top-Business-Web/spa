@extends('front.layouts.master')
@section('content')
    <!--=====================================BREADCRUMB START=====================================-->
    <section class="tf__breadcrumb" style="background: url('{{ asset($settings->banner) }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>our services</h1>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================BREADCRUMB END=====================================-->


    <!--=====================================SERVICES PAGE START=====================================-->
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
                @foreach ($services as $service)
                    <li data-service="{{ $service->title }}" class="service-item active">{{ $service->title }}</li>
                @endforeach
            </ul>
            <div id="service-items-container" class="row">
                @foreach ($services as $service)
                    @foreach ($service->category as $categ)
                        <div class="col-lg-6 wow fadeInUp salon service-item {{ $service->title }}-item"
                             data-service="{{ $service->title }}" data-category="{{ $categ->title }}"
                             data-wow-duration="1s">
                            <div class="tf__services_item">
                                <div class="tf__services_img">
                                    <img src="{{ asset($categ->image) }}" alt="services" class="img-fluid w-100">
                                </div>
                                <div class="tf__services_text d-flex flex-column justify-content-between">
                                    <div>
                                        <a class="title"
                                           href="{{ route('getSingleService', $categ->id) }}">{{ $categ->title }}</a>
                                        <p>{{ $categ->description }}</p>
                                    </div>
                                    <div class="tf__services_btn_area">
                                        <a class="read_btn" href="{{ route('getSingleService', $categ->id) }}">read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================SERVICES PAGE END=====================================-->
@endsection
@section('js')
<script>
    // jQuery code to handle category filtering based on selected service
    $(document).ready(function () {
        $('.service-item').click(function () {
            $('.service-item').removeClass('active');
            $(this).addClass('active');
            var selectedService = $(this).data('service');

            $('.salon').hide();
            $('.' + selectedService + '-item').show();
        });
    });
</script>
@endsection
