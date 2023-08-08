@extends('front.layouts.master')
@section('content')
    <!--=====================================
            BREADCRUMB START
        =====================================-->
    <section class="tf__breadcrumb" style="background: url('{{ asset($settings->banner) }}');">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>services details</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="#">service details</a></li>
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
            SERVICE DETAILS START
        =====================================-->
    <section class="tf__services_details mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__services_details_text">
                        <div class="tf__services_details_img">
                            <img src="{{ asset($page->category->image) }}" alt="service" class="img-fluid w-100">
                            <a class="reservation" href="#" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop2">make an appointment</a>
                        </div>
                        <h2>{{ $page->top_title }}</h2>
                        <p>{{ $page->top_description }}</p>

                        <h3>{{ $page->down_title }}</h3>
                        <p>{{ $page->down_description }}</p>

                        <h3>Our Benefits</h3>
                        <ul>
                            <li>100% Safe For Your Skin</li>
                            <li>Special Offers For You</li>
                            <li>Created From Natural Herbs</li>
                            <li>Quality Product From Spalabs</li>
                            <li>Unique From Others Spa Treatments</li>
                            <li>Unique From Others Spa Treatments</li>
                            <li>Quality Product From Spalabs</li>
                            <li>Created From Natural Herbs</li>
                            <li>Special Offers For You</li>
                            <li>100% Safe For Your Skin</li>
                        </ul>
                    </div>

                    <div class="tf_service_det_tag d-flex flex-wrap align-items-center">
                        <ul class="share d-flex flex-wrap">
                            <li><span><i class="fal fa-share-alt"></i> share :</span></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="tf__service_review_list mt_50">
                        <h3>07 review</h3>
                        <div class="owl-carousel owl-theme">
                            <div class="pb-4">
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_1.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Arlene Mcoy <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(120)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_4.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Marjan Janifa <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(78)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_1.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Arlene Mcoy <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(120)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_2.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Savannah Nguyen <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(20)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-4">
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_1.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Arlene Mcoy <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(120)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_1.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Arlene Mcoy <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(120)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="tf__single_review">
                                    <div class="review_img">
                                        <img src="{{ asset('assets/front') }}/images/review_img_2.jpg" alt="Client"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="review_text">
                                        <h4>Savannah Nguyen <span>17 dec 2022</span></h4>
                                        <p class="review_star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>(20)</span>
                                        </p>
                                        <p class="description">Duis aute irure dolor in reprehenderitin voluptate velit
                                            essecillum int dolore eu fugiatnullail pariatur cepteur sint occaecat
                                            consectetur
                                            adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tf__service_review_input mt_50">
                        <h3>Leave a review</h3>
                        <p>Select Your Rating :
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </p>
                        <form class="row">
                            <div class="col-xl-6">
                                <input type="text" placeholder="Your Name" required>
                            </div>
                            <div class="col-xl-6">
                                <input type="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-12">
                                <textarea rows="7" placeholder="Write Something Here" required></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="common_btn">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tf__service_sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_search sidebar_item mb_25">
                            <h3>Services Searching</h3>
                            <form id="searchForm">
                                <input type="text" id="searchInput" placeholder="Search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                            <div class="result-search">
                                {{-- <ul>
                                    <li><a href="#">Relaxation massage</a></li>
                                    <li><a href="#">Stress relief massage </a></li>
                                    <li><a href="#">Swedish massage</a></li>
                                    <li><a href="#">Stone massage </a></li>
                                    <li><a href="#">Sport massage</a></li>
                                    <li><a href="#">Reflexology massage </a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="tf__sidebar_category sidebar_item mb_25">
                            <h3>Our Service Category</h3>
                            <ul>
                                <li><a href="#">Relaxation massage</a></li>
                                <li><a href="#">Stress relief massage </a></li>
                                <li><a href="#">Swedish massage</a></li>
                                <li><a href="#">Stone massage </a></li>
                                <li><a href="#">Sport massage</a></li>
                                <li><a href="#">Reflexology massage </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tf__related_service mt_115 xs_mt_70">
                <div class="row">
                    <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__section_heading">
                            <h5>related services</h5>
                            <h3>related services</h3>
                        </div>
                    </div>
                </div>
                <div class="row related_service_slider mt_50">
                    <div class="col-xl-6">
                        <div class="tf__services_item">
                            <div class="tf__services_img">
                                <img src="{{ asset('assets/front') }}/images/service_img_4.jpg" alt="services"
                                    class="img-fluid w-100">
                            </div>
                            <div class="tf__services_text d-flex flex-column justify-content-between">
                                <div>
                                    <a class="title" href="service_details.html">Body Treatments</a>
                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                        tate velit esse cillum dolore eu fugiat nulla partr
                                        iatur sunt in culp qui officia deserunt mollit</p>
                                </div>
                                <div class="tf__services_btn_area">
                                    <a class="read_btn" href="service_details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tf__services_item">
                            <div class="tf__services_img">
                                <img src="{{ asset('assets/front') }}/images/service_img_5.jpg" alt="services"
                                    class="img-fluid w-100">
                            </div>
                            <div class="tf__services_text d-flex flex-column justify-content-between">
                                <div>
                                    <a class="title" href="service_details.html">Aroma Therapy</a>
                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                        tate velit esse cillum dolore eu fugiat nulla partr
                                        iatur sunt in culp qui officia deserunt mollit</p>
                                </div>
                                <div class="tf__services_btn_area">
                                    <a class="read_btn" href="service_details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tf__services_item">
                            <div class="tf__services_img">
                                <img src="{{ asset('assets/front') }}/images/service_img_6.jpg" alt="services"
                                    class="img-fluid w-100">
                            </div>
                            <div class="tf__services_text d-flex flex-column justify-content-between">
                                <div>
                                    <a class="title" href="service_details.html">Sauna Relax</a>
                                    <p>Duis aute irure dolor in reprehenderit into volupjl
                                        tate velit esse cillum dolore eu fugiat nulla partr
                                        iatur sunt in culp qui officia deserunt mollit</p>
                                </div>
                                <div class="tf__services_btn_area">
                                    <a class="read_btn" href="service_details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wsus__reservation">
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel2">make an appointment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="wsus__reservation_form">
                            <input class="reservation_input" type="text" placeholder="Name">
                            <input class="reservation_input" type="text" placeholder="Phone">
                            <input class="reservation_input" type="text" placeholder="address">
                            <input class="reservation_input" type="date">
                            <select class="reservation_input" id="select_js3">
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
            SERVICE DETAILS END
        =====================================-->
@endsection
<script>
    $(document).ready(function() {
        $('#searchForm').submit(function(e) {
            e.preventDefault();

            var searchTerm = $('#searchInput').val();
            searchCategories(searchTerm);
        });
    });

    function searchCategories(searchTerm) {
        $.ajax({
            url: '{{ route('searchCategory') }}', // Update this with your route to the controller method
            method: 'GET',
            data: {
                query: searchTerm
            },
            success: function(response) {
                $('#searchResults').html(response);
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }
</script>