@extends('front.layouts.master')
@section('content')
    @include('front.layouts.top_bar')
    @include('front.layouts.navbar')
    <section class="tf___404 mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9 col-xxl-6 m-auto">
                    <img src="{{asset('assets/front/images/done-icon.svg')}}" alt="error" class="img-fluid"
                         style="height: 80px !important; object-fit: contain !important;">
                    <div class="tf___404_text wow fadeInUp" data-wow-duration="1s">
                        <h4>THANK YOU !</h4>
                        <p>{{strtoupper('you are booking successfully')}}</p>
                        <a href="{{ route('home') }}" class="read_btn"><i class="far fa-long-arrow-alt-left"></i> go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
