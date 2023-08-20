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
                            <h1> {{trans('website.services details')}}</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> {{trans('website.Home')}}</a></li>
                                <li><a href="#">{{trans('website.services details')}}</a></li>
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
                                data-bs-target="#staticBackdrop2"> {{trans('website.make an appointment')}}</a>
                        </div>
                        <h2>{{ $page->top_title }}</h2>
                        <p>{{ $page->top_description }}</p>

                        <h3>{{ $page->down_title }}</h3>
                        <p>{{ $page->down_description }}</p>

                        <h3> {{trans('website.Our Benefits')}}</h3>
                        <ul>
                            <li> {{trans('website.100% Safe For Your Skin')}}</li>
                            <li> {{trans('website.Special Offers For You')}}</li>
                            <li> {{trans('website.Created From Natural Herbs')}}</li>
                            <li> {{trans('website.Quality Product From Spalabs')}}</li>
                            <li> {{trans('website.Unique From Others Spa Treatments')}}</li>
                            <li> {{trans('website.Unique From Others Spa Treatments')}}</li>
                            <li> {{trans('website.Quality Product From Spalabs')}}</li>
                            <li> {{trans('website.Created From Natural Herbs')}}</li>
                            <li> {{trans('website.Special Offers For You')}}</li>
                            <li> {{trans('website.100% Safe For Your Skin')}}</li>
                        </ul>
                    </div>

                    <div class="tf_service_det_tag d-flex flex-wrap align-items-center">
                        <ul class="share d-flex flex-wrap">
                            <li><span><i class="fal fa-share-alt"></i> {{trans('website.share')}} :</span></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="tf__service_review_list mt_50">
                        @if ($reviewCount >= 1 && $reviewCount <= 9)
                            <h3>{{ str_pad($reviewCount, 2, '0', STR_PAD_LEFT) }} {{trans('website.review')}}</h3>
                        @else
                            <h3>{{ $reviewCount }} {{trans('website.reviews')}}</h3>
                        @endif
                        <div class="owl-carousel owl-theme">
                            <div class="pb-4">
                                @foreach ($reviews as $index => $review)
                                    @if ($index < 4)
                                        <div class="tf__single_review">
                                            <div class="review_img">
                                                <img src="{{ asset('assets/front') }}/images/review_img_1.jpg"
                                                    alt="Client" class="img-fluid w-100">
                                            </div>
                                            <div class="review_text">
                                                <h4>{{ $review->name }}
                                                    <span>{{ date('Y-m-d', strtotime($review->created_at)) }}</span>
                                                </h4>
                                                <p class="review_star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(120)</span>
                                                </p>
                                                <p class="description">{{ $review->description }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            @if (count($reviews) > 4)
                                <div class="pb-4">
                                    @foreach ($reviews as $index => $review)
                                        @if ($index >= 4 && $index < 8)
                                            <div class="tf__single_review">
                                                <div class="review_img">
                                                    <img src="{{ asset('assets/front') }}/images/review_img_1.jpg"
                                                        alt="Client" class="img-fluid w-100">
                                                </div>
                                                <div class="review_text">
                                                    <h4>{{ $review->name }}
                                                        <span>{{ date('Y-m-d', strtotime($review->created_at)) }}</span>
                                                    </h4>
                                                    <p class="review_star">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span>(120)</span>
                                                    </p>
                                                    <p class="description">Duis aute irure dolor in reprehenderitin
                                                        voluptate
                                                        velit
                                                        essecillum int dolore eu fugiatnullail pariatur cepteur sint
                                                        occaecat
                                                        consectetur
                                                        adipiscing elit.</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="tf__service_review_input mt_50">
                        <h3>{{trans('website.Leave a review')}}</h3>
                        <form class="tf__contact_form reviewForm" id="reviewForm">
                            @csrf
                            <input type="hidden" name="page_id" value="{{ $page->id }}" id="">
                            <input type="hidden" name="rate" value="" id="hiddenRating">
                            <style>

                            </style>
                            <p> {{trans('website.Select Your Rating')}}:
                                <span class="star far fa-star" onclick="rate(1)"></span>
                                <span class="star far fa-star" onclick="rate(2)"></span>
                                <span class="star far fa-star" onclick="rate(3)"></span>
                                <span class="star far fa-star" onclick="rate(4)"></span>
                                <span class="star far fa-star" onclick="rate(5)"></span>
                            <p id="ratingMessage">{{trans('website.Please rate')}}:</p>
                            </p>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="text" name="name" placeholder="{{trans('website.name')}}" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" name="email" placeholder="{{trans('website.email')}}" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea rows="7" name="description" placeholder="{{trans('website.description')}}" required></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="button" class="common_btn">{{trans('website.Submit Now')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tf__service_sidebar" id="sticky_sidebar">
                        {{-- <div class="tf__sidebar_search sidebar_item mb_25">
                            <h3>{{trans('website.Services Searching')}}</h3>
                            <form id="searchForm">
                                <input type="text" id="searchInput" placeholder="Search">
                            </form>
                            <div id="searchResults" class="text-white"></div>
                        </div> --}}
                        <div class="tf__sidebar_category sidebar_item mb_25">
                            <h3>{{trans('website.Our Service Category')}}</h3>
                            <ul>
                                @foreach ($pagesRelatedWithCategory as $pages)
                                    <li><a
                                            href="{{ route('getSingleService', $pages->id) }}">{{ $pages->top_title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="tf__related_service mt_115 xs_mt_70">
                <div class="row">
                    <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__section_heading">
                            <h5>{{trans('website.related services')}}</h5>
                            <h3>{{trans('website.related services')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row related_service_slider mt_50">
                    @foreach ($relatedCategories as $relatedCategory)
                        <div class="col-xl-6">
                            <div class="tf__services_item">
                                <div class="tf__services_img">
                                    <img src="{{ asset($relatedCategory->image) }}" alt="services"
                                        class="img-fluid w-100">
                                </div>
                                <div class="tf__services_text d-flex flex-column justify-content-between">
                                    <div>
                                        <a class="title"
                                            href="{{ route('getSingleService', $relatedCategory->id) }}">{{ $relatedCategory->title }}</a>
                                        <p>{{ $relatedCategory->description }}</p>
                                    </div>
                                    <div class="tf__services_btn_area">
                                        <a class="read_btn"
                                            href="{{ route('getSingleService', $relatedCategory->id) }}">{{trans('website.read more')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                        <h1 class="modal-title fs-5" id="staticBackdropLabel2">{{trans('website.make an appointment')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="wsus__reservation_form">
                            <input class="reservation_input" type="text" placeholder="Name">
                            <input class="reservation_input" type="text" placeholder="Phone">
                            <input class="reservation_input" type="text" placeholder="address">
                            <input class="reservation_input" type="date">
                            <select class="reservation_input" id="select_js3">
                                <option value="">{{trans('website.select time')}}</option>
                                <option value="">08.00 am to 09.00 am</option>
                                <option value="">10.00 am to 11.00 am</option>
                                <option value="">12.00 pm to 01.00 pm</option>
                                <option value="">02.00 pm to 03.00 pm</option>
                                <option value="">04.00 pm to 05.00 pm</option>
                            </select>
                            <textarea rows="5" placeholder="Message"></textarea>
                            <button class="common_btn" type="submit">{{trans('website.submit now')}}</button>
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
@section('js')
    <script>
        // Function Send Review Message Start
        $(document).ready(function(e) {
            $(document).on('click', '.common_btn', function() {
                var formData = new FormData(document.getElementById("reviewForm"));
                $.ajax({
                    method: 'POST',
                    data: formData,
                    url: "{{ route('review.store') }}",
                    beforeSend: function() {
                        $('.load-contact').html('Loading ... ');
                    },
                    success: function(data) {
                        if (data.status === 200) {
                            toastr.success('Message sent successfully');
                            $('#contactForm input, #contactForm textarea').val('');
                            $('.load-contact').html('');
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
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
        // Function Send Review Message Start

        // Function To rate Start
        let currentRating = 0;
        const hiddenRatingInput = document.getElementById('hiddenRating');

        function rate(rating) {
            currentRating = rating;
            updateRatingMessage();
            updateHiddenInput();
        }

        function updateRatingMessage() {
            const ratingMessage = document.getElementById('ratingMessage');
            ratingMessage.textContent = `You rated: ${currentRating} stars`;
        }

        function updateHiddenInput() {
            document.getElementById('hiddenRating').setAttribute('value', currentRating)
        }

        // Function To rate Start

        // Function Search Start
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var searchTerm = $(this).val();

                $.ajax({
                    url: '{{ route('searchCategory') }}',
                    type: 'GET',
                    data: {
                        q: searchTerm
                    },
                    dataType: 'json',
                    success: function(data) {
                        var resultsContainer = $('#searchResults');
                        resultsContainer.empty();

                        if (data.length > 0) {
                            $.each(data, function(index, category) {
                                var categoryLink =
                                    '<p><a class="custom-link" href="/services/category/page/' +
                                    category
                                    .id + '">' + category.title + '</a></p>';
                                resultsContainer.append(categoryLink);
                            });
                        } else {
                            resultsContainer.append(
                                '<p><a class="custom-link">No Results Found</a></p>');
                        }
                    },
                    error: function() {
                        $('#searchResults').html('<p>An error occurred.</p>');
                    }
                });
            });
        });
        // Function Search End
    </script>
@endsection
