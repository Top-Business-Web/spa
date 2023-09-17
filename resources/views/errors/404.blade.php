@extends('front.layouts.master')

@section('content')

    @include('front.layouts.top_bar')

    @include('front.layouts.navbar')

    <section class="tf___404 mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9 col-xxl-6 m-auto">
                    <div class="tf___404_text wow fadeInUp" data-wow-duration="1s">
                        <div class="img">
                            <img src="{{ asset('assets/front/images/error_img.jpg') }}" alt="error" class="img-fluid w-100">
                        </div>
                        <h4>OOOps ! Sorry Page Not Found</h4>
                        <p>The page you are looking for does not exist.It may have been moved, or removed
                            altogether.Perhaps you can return back to the site's homepage .</p>
                        <a href="{{ route('home') }}" class="read_btn"><i class="far fa-long-arrow-alt-left"></i> go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
