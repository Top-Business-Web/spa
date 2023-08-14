@extends('Front.layout.app')
@section('title')
    {{trans('front.Ebhar')}}
@endsection
@section('image')
    {{url('')}}/public/front/img/logo.png
@endsection
@section('content')
    <content>
        @if(session()->has('welcome'))
            <script>
                setTimeout(function () {
                    notif({
                        msg: "{{trans('front.welcome')}} ",
                        type: "info"
                    })
                }, 4000);
            </script>
        @endif
        @if(session()->has('addToCart'))
            <script>
                notif({
                    msg: "{{trans('front.book_added_cart')}}",
                    type: "success"
                })
            </script>
        @endif
        @if(session()->has('info'))
            <script>
                window.onload = function () {
                    notif({
                        msg: "{{trans('front.logout_success')}}",
                        type: "info"
                    })
                }
            </script>
        @endif
    <!-- Top Slider -->
        {{--        <section class="MainSlider">--}}
        {{--            <div class="swiper MainSlider-container ">--}}
        {{--                <div class="swiper-wrapper">--}}
        {{--                    @foreach($sliders as $slider)--}}
        {{--                        <div class="swiper-slide  mainSlideItem gradient-wrap"--}}
        {{--                             style="url({{url('')}}/{{$slider->photo}}) ">--}}
        {{--                            @if($slider['title_'.app()->getLocale()] && $slider['desc_'.app()->getLocale()])--}}
        {{--                                <div class=" info mr-lg-4">--}}
        {{--                                    <img src="{{url('')}}/public/front/img/logo.png">--}}
        {{--                                    <h1>--}}
        {{--                                        <a href="{{$slider->link}}">{{$slider['title_'.\Illuminate\Support\Facades\App::getLocale()]}}</a>--}}
        {{--                                    </h1>--}}
        {{--                                    <p>{{$slider['desc_'.\Illuminate\Support\Facades\App::getLocale()]}}</p>--}}
        {{--                                </div>--}}
        {{--                            @endif--}}
        {{--                        </div>--}}
        {{--                    @endforeach--}}
        {{--                </div>--}}
        {{--                <div class="swiper-button-next"></div>--}}
        {{--                <div class="swiper-button-prev"></div>--}}
        {{--            </div>--}}
        <section class="MainSlider">
            <div class="swiper MainSlider-container ">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                        <div class="swiper-slide  mainSlideItem img-wrap">
                            <img src="{{url('')}}/{{$slider->photo}}" data-adaptive-background class="singleSlide">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- parallax -->
        <section class="parallax">
            <div class="container">
                <div class="parallaxItem">
                    <div class="Info">
                        <i class="fa fa-book"></i>
                        <h3>{{trans('front.num_of_books')}} </h3>
                        <h3>{{$Book_count}}</h3>
                    </div>
                </div>
                <div class="parallaxItem">
                    <div class="Info">
                        <i class="fa fa-user"></i>
                        <h3>{{trans('front.Subscribed_members')}} </h3>
                        <h3>{{$User_count}}</h3>
                    </div>
                </div>
                <div class="parallaxItem">
                    <div class="Info">
                        <i class="fas fa-sparkles"></i>
                        <h3>{{trans('front.authors')}} </h3>
                        <h3>{{$authors_count}}</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- mostRead -->
        <section class="mostRead">
            <div class="container">
                <div class="sectionTitle">
                    <p>{{trans('front.read_now')}}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>{{trans('front.most_ordered')}}</h4>
                        <a href="{{route('Front.books')}}" class="addToCart"> {{trans('front.view_all')}} </a>
                    </div>
                </div>
                <div class="swiper booksSlider">
                    <div class="swiper-wrapper">
                        @if(session()->has('sucsses'))
                            <script>
                                window.onload = function () {
                                    notif({
                                        msg: "{{trans('front.book_added')}}",
                                        type: "success"
                                    })
                                }
                            </script>
                        @endif
                        @if(session()->has('danger'))
                            <script>
                                window.onload = function () {
                                    notif({
                                        msg: "{{trans('front.book_removed')}}",
                                        type: "error"
                                    })
                                }
                            </script>
                        @endif
                            @isset($Books)
                        @foreach($Books as $Book)
                            <div class="swiper-slide p-1">
                                <div class="book">
                                    <div class="bookPic">
                                        <a href="{{route('bookDetails',$Book->id)}}" class="bookAnimate">
                                            <div class="bookImg">
                                                <div class="frontCover"><img src="{{url('')}}/{{$Book->frontCover}}">
                                                </div>
                                                <div class="backCover"><img src="{{url('')}}/{{$Book->backCover}}">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="action_links">
                                            <ul>
                                                @if($Book->is_available)

                                                <li class="add_to_cart">

                                                    <a href="#!" class="a_T_C" data-book_id="{{$Book->id}}"
                                                       data-bs-toggle="modal" data-bs-target="#chooseModal"
                                                       data-tippy=" {{trans('front.add_to_cart')}}">
                                                        <span class=" fa fa-shopping-basket"></span>
                                                    </a>
                                                </li>
                                                @endif
                                                <li class="wishlist">

                                                    {{--                                                    @if(auth()->guard('user')->user())--}}
                                                    <a href="{{route('addFavorite',$Book->id)}}"
                                                       data-tippy="{{trans('front.add_to_fav')}}">
                                                        {{--                                                            @else--}}
                                                        {{--                                                                <a href="{{route('addFavorite',[$Book->id,1])}}"--}}
                                                        {{--                                                                   data-tippy="{{trans('front.add_to_fav')}}">--}}
                                                        {{--                                                                    @endif--}}

                                                        @if($Book->is_favorite)
                                                            <span class="fa fa-heart"
                                                                  style="color:red"></span>
                                                        @else
                                                            <span class="fa fa-heart"></span>
                                                        @endif

                                                    </a>
                                                    {{--                                                    @else--}}
                                                    {{--                                                        <a href="{{route('addFavorite',$Book->id)}}"--}}
                                                    {{--                                                           data-tippy="{{trans('front.add_to_fav')}}">--}}
                                                    {{--                                                            @if($Book->is_favorite)--}}
                                                    {{--                                                                <span class="fa fa-heart"--}}
                                                    {{--                                                                      style="color:red"></span>--}}
                                                    {{--                                                            @else--}}
                                                    {{--                                                                <span class="fa fa-heart"></span>--}}
                                                    {{--                                                            @endif--}}

                                                    {{--                                                        </a>--}}
                                                    {{--                                                    @endif--}}
                                                </li>

                                                @if($Book->is_type == 1)
                                                    <li>
                                                        <a href="{{route('bookDetails',$Book->id)}}"
                                                           data-tippy="{{trans('front.book_details')}}"
                                                        ><span class="fas fa-book"></span></a>
                                                    </li>
                                                @else
                                                    <li></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bookData">
                                        @if (app() -> getlocale() == 'ar')
                                            <a href="{{route('bookDetails',$Book->id)}}"
                                               class="bookName">{{$Book->name}} </a>
                                        @else
                                            <a href="{{route('bookDetails',$Book->id)}}"
                                               class="bookName">{{$Book->name_en ?? $Book->name}} </a>
                                        @endif

                                        @if($Book->is_publisher == 'ebhar')
                                            <a href="#" class="authorImg"> <img
                                                        src="{{url('')}}/public/front/img/logo.png" class="me-2">
                                                <span>{{$Book->auther_name}}</span> </a>
                                        @else
                                            <a href="{{route('authors.Details',$Book->user->id)}}" class="authorImg">
                                                @if($Book->photo == null)
                                                    <img src="{{url('')}}/public/front/img/users/11.jpg" class="me-2">
                                                @else
                                                    <img src="{{url('')}}/{{$author->photo}}" class="me-2">
                                                @endif
                                                <span>{{$author->name}}</span> </a>
                                        @endif



                                        @if(isset($Book->offer->rate))
                                            <div class="bookPrice">
                                                <span class="me-2">{{trans('front.EGP')}}{{$Book->amount - (($Book->amount * $Book->offer->rate) / 100)}}</span>
                                                <del>{{trans('front.EGP')}} {{$Book->amount}}</del>
                                            </div>
                                        @else
                                            <div class="bookPrice">
                                                <span class="me-2">{{trans('front.EGP')}}{{$Book->amount}}</span>
                                            </div>
                                        @endif
                                        <div class="rate">
                                            <?php
                                            $Book_commints = App\Models\Book_commint::where('booK_id', $Book->id)->latest()->get();
                                            if($Book_commints->where('star','<>',null)->count() != 0)
                                                $average = $Book_commints->where('star','<>',null)->sum('star')/$Book_commints->where('star','<>',null)->count();
                                            else
                                                $average = 0;
                                            ?>
                                                <ul>
                                                    @if($average != 0)
                                                        @for($i = 1 ; $i <= 5 ; $i++)
                                                            <li><i class="fas fa-star {{($i > round($average)) ? 'text-secondary' : ''}}"></i></li>
                                                        @endfor
{{--                                                        <span class="text-secondary">({{round($average,1)}})</span>--}}
                                                    @endif
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            @endisset

                    </div>
                    <!-- Add Arrows -->
                    {{--                    <div class="swiper-pagination"></div>--}}
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

            @isset($other_books)
         <section class="mostRead" style="padding-top: 25px">
                <div class="container">
                    <div class="sectionTitle">
                        <p>{{trans('front.read_now')}}</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>{{trans('front.most_ordered_other')}}</h4>
                            <a href="{{route('Front.books')}}" class="addToCart"> {{trans('front.view_all')}} </a>
                        </div>
                    </div>
                    <div class="swiper booksSlider">
                        <div class="swiper-wrapper">
                            @if(session()->has('sucsses'))
                                <script>
                                    window.onload = function () {
                                        notif({
                                            msg: "{{trans('front.book_added')}}",
                                            type: "success"
                                        })
                                    }
                                </script>
                            @endif
                            @if(session()->has('danger'))
                                <script>
                                    window.onload = function () {
                                        notif({
                                            msg: "{{trans('front.book_removed')}}",
                                            type: "error"
                                        })
                                    }
                                </script>
                            @endif
                            @isset($other_books)
                                @foreach($other_books as $Book)
                                    <div class="swiper-slide p-1">
                                        <div class="book">
                                            <div class="bookPic">
                                                <a href="{{route('bookDetails',$Book->id)}}" class="bookAnimate">
                                                    <div class="bookImg">
                                                        <div class="frontCover"><img src="{{url('')}}/{{$Book->frontCover}}">
                                                        </div>
                                                        <div class="backCover"><img src="{{url('')}}/{{$Book->backCover}}">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="action_links">
                                                    <ul>
                                                        @if($Book->is_available)

                                                            <li class="add_to_cart">

                                                                <a href="#!" class="a_T_C" data-book_id="{{$Book->id}}"
                                                                   data-bs-toggle="modal" data-bs-target="#chooseModal"
                                                                   data-tippy=" {{trans('front.add_to_cart')}}">
                                                                    <span class=" fa fa-shopping-basket"></span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        <li class="wishlist">

                                                            {{--                                                    @if(auth()->guard('user')->user())--}}
                                                            <a href="{{route('addFavorite',$Book->id)}}"
                                                               data-tippy="{{trans('front.add_to_fav')}}">
                                                                {{--                                                            @else--}}
                                                                {{--                                                                <a href="{{route('addFavorite',[$Book->id,1])}}"--}}
                                                                {{--                                                                   data-tippy="{{trans('front.add_to_fav')}}">--}}
                                                                {{--                                                                    @endif--}}

                                                                @if($Book->is_favorite)
                                                                    <span class="fa fa-heart"
                                                                          style="color:red"></span>
                                                                @else
                                                                    <span class="fa fa-heart"></span>
                                                                @endif

                                                            </a>
                                                            {{--                                                    @else--}}
                                                            {{--                                                        <a href="{{route('addFavorite',$Book->id)}}"--}}
                                                            {{--                                                           data-tippy="{{trans('front.add_to_fav')}}">--}}
                                                            {{--                                                            @if($Book->is_favorite)--}}
                                                            {{--                                                                <span class="fa fa-heart"--}}
                                                            {{--                                                                      style="color:red"></span>--}}
                                                            {{--                                                            @else--}}
                                                            {{--                                                                <span class="fa fa-heart"></span>--}}
                                                            {{--                                                            @endif--}}

                                                            {{--                                                        </a>--}}
                                                            {{--                                                    @endif--}}
                                                        </li>

                                                        @if($Book->is_type == 1)
                                                            <li>
                                                                <a href="{{route('bookDetails',$Book->id)}}"
                                                                   data-tippy="{{trans('front.book_details')}}"
                                                                ><span class="fas fa-book"></span></a>
                                                            </li>
                                                        @else
                                                            <li></li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bookData">
                                                @if (app() -> getlocale() == 'ar')
                                                    <a href="{{route('bookDetails',$Book->id)}}"
                                                       class="bookName">{{$Book->name}} </a>
                                                @else
                                                    <a href="{{route('bookDetails',$Book->id)}}"
                                                       class="bookName">{{$Book->name_en ?? $Book->name}} </a>
                                                @endif

                                                @if($Book->is_publisher == 'ebhar')
                                                    <a href="#" class="authorImg"> <img
                                                                src="{{url('')}}/public/front/img/logo.png" class="me-2">
                                                        <span>{{$Book->auther_name}}</span> </a>
                                                @else
                                                    <a href="{{route('authors.Details',$Book->user->id)}}" class="authorImg">
                                                        @if($Book->photo == null)
                                                            <img src="{{url('')}}/public/front/img/users/11.jpg" class="me-2">
                                                        @else
                                                            <img src="{{url('')}}/{{$author->photo}}" class="me-2">
                                                        @endif
                                                        <span>{{$author->name}}</span> </a>
                                                @endif



                                                @if(isset($Book->offer->rate))
                                                    <div class="bookPrice">
                                                        <span class="me-2">{{trans('front.EGP')}}{{$Book->amount - (($Book->amount * $Book->offer->rate) / 100)}}</span>
                                                        <del>{{trans('front.EGP')}} {{$Book->amount}}</del>
                                                    </div>
                                                @else
                                                    <div class="bookPrice">
                                                        <span class="me-2">{{trans('front.EGP')}}{{$Book->amount}}</span>
                                                    </div>
                                                @endif
                                                <div class="rate">
                                                    <?php
                                                    $Book_commints = App\Models\Book_commint::where('booK_id', $Book->id)->latest()->get();
                                                    if($Book_commints->where('star','<>',null)->count() != 0)
                                                        $average = $Book_commints->where('star','<>',null)->sum('star')/$Book_commints->where('star','<>',null)->count();
                                                    else
                                                        $average = 0;
                                                    ?>
                                                    <ul>
                                                        @if($average != 0)
                                                            @for($i = 1 ; $i <= 5 ; $i++)
                                                                <li><i class="fas fa-star {{($i > round($average)) ? 'text-secondary' : ''}}"></i></li>
                                                            @endfor
                                                            {{--                                                        <span class="text-secondary">({{round($average,1)}})</span>--}}
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset

                        </div>
                        <!-- Add Arrows -->
                        {{--                    <div class="swiper-pagination"></div>--}}
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </section>
            @endisset()

        @if(isset($book_is_better))
        <!-- special -->
            <section class="specialBook">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-4 p-1 order-sm-last">
                            <img style="max-height: 242px;" src="{{url('')}}/{{$book_is_better->frontCover}}"
                                 class="specialImg">
                        </div>
                        <div class="col-sm-8 p-1 order-sm-first">
                            <span class="tag"> {{trans('front.special')}} </span>
                            <h4> {{trans('front.best_book')}}</h4>
                            @if (app() -> getlocale() == 'ar')
                                <a href="{{route('bookDetails',$book_is_better->id)}}"
                                   class="bookName">{{$book_is_better->name}}</a>
                            @else
                                <a href="{{route('bookDetails',$book_is_better->id)}}"
                                   class="bookName">{{$book_is_better->name_en ?? $book_is_better->name}}</a>
                            @endif


                            @if($book_is_better->is_publisher == 'ebhar')
                                <a href="#" class="authorImg"> <img src="{{url('')}}/public/front/img/logo.png"
                                                                    class="me-2">
                                    <span>{{$book_is_better->auther_name}}</span> </a>
                            @else
                                <a href="{{route('authors.Details',$author->id)}}" class="authorImg">
                                    @if($author->photo == null)
                                        <img src="{{url('')}}/public/front/img/users/11.jpg" class="me-2">
                                    @else
                                        <img src="{{url('')}}/{{$author->photo}}" class="me-2">
                                    @endif
                                    <span>{{$author->name}}</span> </a>
                            @endif

                            @if(isset($book_is_better->offer->rate))
                                <div class="bookPrice">
                                    <span class="me-2">{{trans('front.EGP')}}{{$book_is_better->amount - (($book_is_better->amount * $book_is_better->offer->rate) / 100)}}</span>
                                    <del>{{trans('front.EGP')}} {{$book_is_better->amount}}</del>
                                </div>
                            @else
                                <div class="bookPrice">
                                    <span class="me-2">{{trans('front.EGP')}}{{$book_is_better->amount}}</span>
                                </div>
                            @endif

                            <div class="rate">
                                <?php
                                $Book_commints = App\Models\Book_commint::where('booK_id', $book_is_better->id)->latest()->get();
                                if($Book_commints->where('star','<>',null)->count() != 0)
                                    $average = $Book_commints->where('star','<>',null)->sum('star')/$Book_commints->where('star','<>',null)->count();
                                else
                                    $average = 0;
                                ?>
                                    @if($average != 0)
                                        <ul>
                                            @for($i = 1 ; $i <= 5 ; $i++)
                                                <li><i class="fas fa-star {{($i > round($average)) ? 'text-secondary' : ''}}"></i></li>
                                            @endfor
                                        </ul>
                                        {{--                                                        <span class="text-secondary">({{round($average,1)}})</span>--}}
                                    @endif
                            </div>
                            @if($book_is_better->is_available)

                            <a href="#!" data-book_id="{{$book_is_better->id}}" class="addToCart a_T_C"
                               data-bs-toggle="modal" data-bs-target="#chooseModal"> <i
                                        class="fa fa-shopping-basket me-2"></i> {{trans('front.add_to_cart')}} </a>
                                @endif
                        </div>
                    </div>
                </div>
            </section>
        @else
            <div></div>
        @endif

    <!-- Counter -->
        <section class="Counter-area">
            <div class="container">

                <div class="swiper countSlider">
                    <div class="swiper-wrapper">
                        @foreach($Categories as $Category)
                            <div class="swiper-slide p-1">
                                <div class="single-Counter">
                                    <span class="icon me-4"><i class="fad fa-books"></i> </span>
                                    <div class="Text">
                                        <p>{{$Category['name_'.\Illuminate\Support\Facades\App::getLocale()]}}</p>
                                        <span class="odometer" data-count="{{$Category->books->count()}}"></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- picked by author -->
        <section class="authorSection">
            <div class="container">
                <div class="sectionTitle">
                    <p>{{trans('front.read_now')}}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4> {{trans('front.Selected_books')}} </h4>
                        <a href="{{route('Front.books')}}" class="addToCart"> {{trans('front.more')}} </a>
                    </div>
                </div>
                <div class="swiper authorSlider">
                    <div class="swiper-wrapper">
                        @foreach($book_is_selected_books as $book_is_selected_book)
                            <?php     $category = App\Models\Category::find($book_is_selected_book->category_id); ?>
                            <div class="swiper-slide p-2">
                                <div class="author">
                                    <div class="featureImg">
                                        <div class="bookImg">
                                            <div class="frontCover">
                                                <img src="{{url('')}}/{{$book_is_selected_book->frontCover}}">
                                            </div>
                                        </div>
                                        <div class="hoverContent">
                                            @if (app() -> getlocale() == 'ar')
                                                <p> {{ \Illuminate\Support\Str::limit($book_is_selected_book->overview_of_the_work, 200, $end='......') }}</p>
                                                <h6> {{trans('front.page_num')}} :
                                                    <span> {{$book_is_selected_book->number_of_pages}} </span></h6>
                                                <h6> {{trans('front.Category')}} : <span> {{$category->name_ar}} </span>
                                                </h6>
                                            @else
                                                <p> {{ \Illuminate\Support\Str::limit($book_is_selected_book->overview_of_the_work_en ?? $book_is_selected_book->overview_of_the_work, 200, $end='......') }}</p>
                                                <h6> {{trans('front.page_num')}} :
                                                    <span> {{$book_is_selected_book->number_of_pages}} </span></h6>
                                                <h6> {{trans('front.Category')}} :
                                                    <span> {{$category->name_en ?? $category->name_ar}} </span>
                                                </h6>
                                            @endif



                                            @if(isset($book_is_selected_book->offer->rate))
                                                <div class="bookPrice">
                                                    <span class="me-2">{{trans('front.EGP')}}{{$book_is_selected_book->amount - (($book_is_selected_book->amount * $book_is_selected_book->offer->rate) / 100)}}</span>
                                                    <del>{{trans('front.EGP')}} {{$book_is_selected_book->amount}}</del>
                                                </div>
                                            @else
                                                <div class="bookPrice">
                                                    <span class="me-2"> {{trans('front.EGP')}} {{$book_is_selected_book->amount}}</span>
                                                </div>
                                            @endif
                                            <div class="rate">
                                                <?php
                                                $Book_commints = App\Models\Book_commint::where('booK_id', $book_is_selected_book->id)->latest()->get();
                                                if($Book_commints->where('star','<>',null)->count() != 0)
                                                    $average = $Book_commints->where('star','<>',null)->sum('star')/$Book_commints->where('star','<>',null)->count();
                                                else
                                                    $average = 0;
                                                ?>

                                                    @if($average != 0)
                                                        <ul>
                                                            @for($i = 1 ; $i <= 5 ; $i++)
                                                                <li><i class="fas fa-star {{($i > round($average)) ? 'text-secondary' : ''}}"></i></li>
                                                            @endfor
                                                        </ul>

                                                    @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="authorInfo">
                                        @if (app() -> getlocale() == 'ar')
                                            <a href="{{route('bookDetails',$book_is_selected_book->id)}}"
                                               class="bookName"> {{$book_is_selected_book->name}} </a>
                                        @else
                                            <a href="{{route('bookDetails',$book_is_selected_book->id)}}"
                                               class="bookName"> {{$book_is_selected_book->name_en ?? $book_is_selected_book->name}} </a>
                                            @endif
                                            </a>

                                            @if($book_is_selected_book->is_publisher == 'ebhar')
                                                <a href="#" class="authorImg"> <img
                                                            src="{{url('')}}/public/front/img/logo.png" class="me-2">
                                                    <span>{{$book_is_selected_book->auther_name}}</span> </a>
                                            @else
                                                <a href="{{route('authors.Details',$book_is_selected_book->user->id)}}"
                                                   class="authorImg">
                                                    @if($author->photo == null)
                                                        <img src="{{url('')}}/public/front/img/users/11.jpg"
                                                             class="me-2">
                                                    @else
                                                        <img src="{{url('')}}/{{$book_is_selected_book->user->photo}}"
                                                             class="me-2">
                                                    @endif
                                                    <span>{{$book_is_selected_book->user->name}}</span> </a>
                                            @endif

                                            @if($book_is_selected_book->is_available)

                                            <a href="#!" data-book_id="{{$book_is_selected_book->id}}"
                                               class="addToCart a_T_C"
                                               data-bs-toggle="modal" data-bs-target="#chooseModal"> <span
                                                        class="fa fa-shopping-basket me-2"></span>{{trans('front.add_to_cart')}}
                                            </a>
                                            @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    {{--                    <div class="swiper-pagination"></div>--}}
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- Newest -->
{{--        @if($book_is_The_most_read->count() > 0)--}}
{{--            <section class="Newest">--}}
{{--                <div class="container">--}}
{{--                    <div class="sectionTitle">--}}
{{--                        <p>{{trans('front.read_now')}}</p>--}}
{{--                        <div class="d-flex align-items-center justify-content-between">--}}
{{--                            <h4> {{trans('front.most_read')}} </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper booksSlider">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            @foreach($book_is_The_most_read as $The_most_read)--}}
{{--                                <div class="swiper-slide p-1">--}}
{{--                                    <div class="book">--}}
{{--                                        <div class="bookPic">--}}
{{--                                            <a href="{{route('bookDetails',$The_most_read->id)}}" class="bookAnimate">--}}
{{--                                                <div class="bookImg">--}}
{{--                                                    <div class="frontCover"><img--}}
{{--                                                                src="{{url('')}}/{{$The_most_read->frontCover}}"></div>--}}
{{--                                                    <div class="backCover"><img--}}
{{--                                                                src="{{url('')}}/{{$The_most_read->backCover}}"></div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <div class="action_links">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="wishlist">--}}
{{--                                                        @if(auth()->guard('user')->user())--}}
{{--                                                            <a href="{{route('addFavorite',[$The_most_read->id,auth()->guard('user')->user()->id])}}"--}}
{{--                                                               data-tippy="{{trans('front.add_to_fav')}}">--}}
{{--                                                                --}}{{--                                                                @else--}}
{{--                                                                --}}{{--                                                                    <a href="{{route('addFavorite',[$The_most_read->id,1])}}"--}}
{{--                                                                --}}{{--                                                                       data-tippy="{{trans('front.add_to_fav')}}">--}}


{{--                                                                @if($Book->is_favorite)--}}
{{--                                                                    <span class="fa fa-heart"--}}
{{--                                                                          style="color:red"></span>--}}
{{--                                                                @else--}}
{{--                                                                    <span class="fa fa-heart"></span>--}}
{{--                                                                @endif--}}

{{--                                                            </a>--}}
{{--                                                        @endif--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="{{route('bookDetails',$The_most_read->id)}}"--}}
{{--                                                           data-tippy="{{trans('front.book_details')}}"--}}
{{--                                                        ><span class="fas fa-book"></span></a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="bookData">--}}
{{--                                            @if (app() -> getlocale() == 'ar')--}}
{{--                                                <a href="{{route('bookDetails',$The_most_read->id)}}"--}}
{{--                                                   class="bookName"> {{$The_most_read->name}} </a>--}}
{{--                                            @else--}}
{{--                                                <a href="{{route('bookDetails',$The_most_read->id)}}"--}}
{{--                                                   class="bookName"> {{$The_most_read->name_en ?? $The_most_read->name}} </a>--}}
{{--                                            @endif--}}
{{--                                            <span>{{$The_most_read->auther_name}}</span> </a>--}}
{{--                                            <div class="bookPrice">--}}
{{--                                                @if($The_most_read->details)--}}
{{--                                                    @if($The_most_read->details->price_type == 'money')--}}
{{--                                                        <span class="me-2"> {{trans('front.EGP')}} 20</span>--}}
{{--                                                    @else--}}
{{--                                                        <span class="me-2 text-success">{{trans('front.freee')}}</span>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    <span class="me-2"> {{trans('front.EGP')}} 20</span>--}}
{{--                                                @endif--}}

{{--                                            </div>--}}

{{--                                            <div class="rate">--}}
{{--                                                <?php--}}
{{--                                                $Book_commints = App\Models\Book_commint::where('booK_id', $The_most_read->id)->latest()->get();--}}
{{--                                                if($Book_commints->where('star','<>',null)->count() != 0)--}}
{{--                                                    $average = $Book_commints->where('star','<>',null)->sum('star')/$Book_commints->where('star','<>',null)->count();--}}
{{--                                                else--}}
{{--                                                    $average = 0;--}}
{{--                                                ?>--}}
{{--                                                    @if($average != 0)--}}
{{--                                                        <ul>--}}
{{--                                                            @for($i = 1 ; $i <= 5 ; $i++)--}}
{{--                                                                <li><i class="fas fa-star {{($i > round($average)) ? 'text-secondary' : ''}}"></i></li>--}}
{{--                                                            @endfor--}}
{{--                                                        </ul>--}}
{{--                                                        --}}{{--                                                        <span class="text-secondary">({{round($average,1)}})</span>--}}
{{--                                                    @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <!-- Add Arrows -->--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        @endif--}}
    <!-- home Blogs -->
        <section class="homeBlogs">
            <div class="container">
                <div class="titleTwo">
                    <h4> {{trans('front.blogs')}} </h4>
                    <a href="{{url('blogs')}}" class="addToCart"> {{trans('front.more')}} </a>
                </div>
                <div class="swiper blogs-container ">
                    <div class="swiper-wrapper">
                        @foreach($blogs as $blog)

                            <div class="swiper-slide">
                                <div class="blog row ">
                                    <div class="blog-image col-md-5  p-0">
                                        <a href="{{route('blogs-details',$blog->id)}}"><img
                                                    src="{{asset($blog->photo)}}"></a>
                                    </div>
                                    <span class=" date"> <i class="fas fa-calendar-alt me-2"></i> {{$blog->created_at->format('Y / m / d') }} </span>
                                    <div class="blog-content col-md-7 ">
                                        <h5>
                                            <a href="{{route('blogs-details',$blog->id)}}"> {{$blog['title_'.\Illuminate\Support\Facades\App::getLocale()]}} </a>
                                        </h5>
                                        <p>{{substr(strip_tags($blog['desc1_'.\Illuminate\Support\Facades\App::getLocale()]),0,200)}}</p>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </section>
        <!-- testimonials -->
        <section class="testimonials">
            <div class="container">
                <h3 class="testimonialsHead"><i class="fas fa-comments"></i>{{trans('front.users_reviews')}} </h3>
                <div class="swiper testimonialsSlider">
                    <div class="swiper-wrapper">
                        @foreach($comments as $comment)
                            <div class="swiper-slide p-2">
                                <div class="single-item">
                                    <div class="item-comment">
                                        <p>{{$comment['desc_'.\Illuminate\Support\Facades\App::getLocale()]}}</p>
                                    </div>
                                    <div class="client-info">
                                        <div class="client-details">
                                            <h5> {{$comment['name_'.\Illuminate\Support\Facades\App::getLocale()]}}</h5>
                                        </div>
                                        <div class="client-img-area">
                                            <img src="{{asset($comment->photo)}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        {{--  elkomy      --}}

    <!-- Button trigger modal -->
        {{--            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chooseModal">--}}
        {{--            </button>--}}

    <!-- Modal -->
        @if(auth()->guard('user')->user())
            <div class="modal fade" id="chooseModal" tabindex="-1" aria-labelledby="chooseModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body bookModal">
                            <img class="logo" src="{{url('')}}/public/front/img/logo.png"></a>
                            <h5> تم اضافة الكتاب الي سلة المشتريات </h5>
                            <div class="">
                                <a href="{{route('Carts')}}" class="addToCart m-2"> <i
                                            class="fa fa-shopping-basket me-2"></i> اذهب الي السلة </a>
                                <button class="addToCart m-2" id="addSale"><i class="fa fa-sign-in me-2"></i> شراء
                                    الكتاب
                                </button>
                                <button class="addToCart m-2" id="dismiss_add_modal" data-bs-dismiss="modal"><i
                                            class="fas fa-books-medical me-2"></i> استكمال التسوق
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </content>
    @endif
@endsection

