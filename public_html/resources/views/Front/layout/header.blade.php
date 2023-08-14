<?php use Illuminate\Support\Str;$Categories = \App\Models\Category::latest()->get() ?>
<?php $setting = \App\Models\Setting::first()?>

@if(auth()->guard('user')->user())
<?php
//$Favorites = \App\Models\Favorite::where('user_id', auth()->guard('user')->user()->id)->latest()->get();
//$Carts = \App\Models\Cart::where('user_id', auth()->guard('user')->user()->id)->latest()->get();
$Favorites = \App\Models\Favorite::where('user_id', auth()->guard('user')->user()->id)->count();
$Carts = \App\Models\Cart::where('user_id', auth()->guard('user')->user()->id)->count();
$Chats = App\Models\RoomChat::where('to', auth()->guard('user')->user()->id)->where('is_read', 0)->count()

?>
@else
<?php

$Favorites = 0;
$Carts = \App\Models\Cart::where('user_id', (\Illuminate\Support\Facades\Session::get('user_id')) ?? \Illuminate\Support\Facades\Session::put('user_id',Str::random(2).rand(9999,99999)))->count();
$Chats = 0;
//$Favorites = \App\Models\Favorite::where('user_id', 1)->latest()->get();
//$Carts = \App\Models\Cart::where('user_id', 1)->latest()->get();
?>
@endif
        <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    {{--    <title>{{trans('front.Ebhar')}}</title>--}}
    <title>@yield('title')</title>
    <meta name="description" content="مكتبة , كتب الكترونية , روايات , كتاب , book , ابهار , قراءة , نشر , مكتبة ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <!-- Google Ads script -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6331065741895659"
                crossorigin="anonymous"></script>
    <script data-ad-client="pub-6331065741895659" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "pub-6331065741895659",
            enable_page_level_ads: true
        });
    </script>
    <!-- /Google Ads script -->


    <!-- CSS
    ========================= -->
    @if (app() -> getlocale() == 'ar')
    <!--bootstrap min css-->
        <link rel="stylesheet" href="{{url('')}}/public/front/css/bootstrap.rtl.css">
    @else
        <link rel="stylesheet" href="{{url('')}}/public/front/css/bootstrap.min.css">
    @endif
<!--font awesome css-->
    <link rel="stylesheet" href="{{url('')}}/public/front/css/font.awesome.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{url('')}}/public/front/css/animate.css">
    <!--swiper css-->
    <link rel="stylesheet" href="{{url('')}}/public/front/css/swiper.css"/>
    <!--nice-select css-->
    <link rel="stylesheet" href="{{url('')}}/public/front/css/nice-select.css">
    <!--odometer css-->
    <link rel="stylesheet" href="{{url('')}}/public/front/css/odometer.css">
    <!--dropify css-->
    <link rel="stylesheet" href="{{url('')}}/public/front/css/dropify.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/public/front/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css"
          id="theme-styles">
    @toastr_css
    @if (app() -> getlocale() == 'ar')
    <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{url('')}}/public/front/css/style.css">
    @else
        <link rel="stylesheet" href="{{url('')}}/public/front/css/styleEN.css">
    @endif

    <link href="{{url('/')}}/public/admin/assets/plugins/notify/css/notifIt.css" rel="stylesheet"/>
    @include('Front.load.loaderCss')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            @if($Carts <= 0)
            $('#countItems').hide();
            @endif
            @if($Chats <= 0)
            $('#countChat').hide();
            @endif
            @if($Favorites <= 0)
            $('#fav_count').hide();
            @endif
        });
    </script>
</head>

<body>

<div class="loader-ajax" style="display: none  ; ">
    <img src="@yield('image')" style="display: none">
    <div class="lds-grid">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>
        </div>
    </div>
</div>
<?php $shipping_free = \App\Models\Shipping_free::firstOrFail()?>
@if($shipping_free->status == 'yes')
    <!-- Header Start -->
    <div class="offerHead">
        <div class="container">
            <p>{{trans('front.buyBy')}} {{$shipping_free->price}} {{trans('front.andGet')}}</p>
        </div>
    </div>
@else
    <div></div>
@endif

<!--mobile menu -->
<div class="off_canvars_overlay"></div>
<div class="offcanvas_menu">
    <div class="container">
        <input name="user_id" hidden id="user_id" value="1">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="#!"><i class="fal fa-bars"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="#!"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="language_currency">
                        <ul>
                            <li class="language"><a href="#!"> {{trans('front.language')}} <i
                                            class="fal fa-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li>
                                @if(auth()->guard('user')->user())
                                    <a href="{{route('authors.logout')}}">{{trans('front.logout')}}</a>
                                @else
                                    <a href="{{route('user.login')}}">{{trans('front.login')}}</a>
                                @endif
                            </li>
                            {{--                            <li class="currency"><a href="#"> {{trans('front.Currency')}} <i class="fal fa-chevron-down"></i></a>--}}
                            {{--                                <ul class="dropdown_currency">--}}
                            {{--                                    <li><a href="#"> جنية مصري </a></li>--}}
                            {{--                                    <li><a href="#"> US Dollar</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                        </ul>
                    </div>

                    <div class="header_social text-right">
                        <ul>
                            <li><a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="mailto:{{$setting->gmail}}"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="https://wa.me/{{$setting->whats}}"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div id="menu" class="text-left">
                        <ul class="offcanvas_main_menu">

                            @if(auth()->guard('user')->user())
                                <li>

                                    @if(auth()->guard('user')->user()->photo == null)
                                        <img src="{{url('')}}/public/front/img/user.gif" class="headerUserImg">
                                    @else
                                        <img src="{{url('')}}/{{auth()->guard('user')->user()->photo}}"
                                             class="headerUserImg">
                                    @endif

                                    <a href="{{url('authors/order')}}" class="d-inline-block m-3">Hi
                                        - {{auth()->guard('user')->user()->first_name}} {{auth()->guard('user')->user()->last_name}} </a>
                                </li>

                            @endif

                            <li class="menu-item-has-children">
                                <a href="#">{{trans('front.ebhar_library')}}</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        {{--                                        <a href="{{route('Front.booksIsType',0)}}">{{trans('front.paper books')}}</a>--}}
                                        <a href="{{route('publishing-houses',0)}}">{{trans('front.paper books')}}</a>
                                        <ul class="sub-menu">
                                            @foreach($Categories as $Category)
                                                @if (app() -> getlocale() == 'ar')
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('Front.booksIsType',1)}}">{{trans('front.digital books')}}</a>
                                        <ul class="sub-menu">
                                            @foreach($Categories as $Category)
                                                @if (app() -> getlocale() == 'ar')
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">{{trans('front.Book_Ratings')}}</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a
                                                href="{{route('Front.books')}}">{{trans('front.most read')}}</a>
                                        <ul class="sub-menu">
                                            @foreach($Categories as $Category)
                                                @if (app() -> getlocale() == 'ar')
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a
                                                href="{{route('Front.books')}}">{{trans('front.recently added')}}</a>
                                        <ul class="sub-menu">
                                            @foreach($Categories as $Category)
                                                @if (app() -> getlocale() == 'ar')
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a
                                                href="{{route('Front.books')}}">{{trans('front.Best seller')}}</a>
                                        <ul class="sub-menu">
                                            @foreach($Categories as $Category)
                                                @if (app() -> getlocale() == 'ar')
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="{{route('Front.Home')}}"> {{trans('front.home')}} </a></li>
                            <li><a href="{{route('authors.index')}}"> {{trans('front.authors')}} </a></li>
                            <li><a href="{{route('reviews')}}"> {{trans('front.reviews')}} </a></li>

                            <li class="menu-item-has-children">
                                <a href="#"> {{trans('front.publishing')}}</a>
                                <ul class="sub_menu">
{{--                                    <li class="menu-item-has-children"><a--}}
{{--                                                href="{{url('publishing')}}">{{trans('front.E-Business')}}</a></li>--}}
                                    @if((auth()->guard('user')->user()))
                                        <li class="menu-item-has-children"><a
                                                    href="{{url('authors/add-book/paper')}}">{{trans('front.E-Publishing_paperwork')}}</a>
                                        </li>
                                    @else
                                        <li class="menu-item-has-children"><a
                                                    href="{{route('authors.getlogin')}}">{{trans('front.E-Publishing_paperwork')}}</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>

                            <li><a href="{{url('workshop')}}"> {{trans('front.workshop')}} </a></li>
                            <li><a href="{{route('blogs')}}"> {{trans('front.blogs')}} </a></li>
                            <li><a href="{{route('Front.contact')}}"> {{trans('front.contact')}} </a></li>

                            {{--                                <li class="menu-item-has-children">--}}
                            {{--                                    <a href="#"> {{trans('front.contact')}}--}}
                            {{--                                        <span class="myCir" id="countItems">--}}
                            {{--                                            0--}}
                            {{--                                        </span>--}}
                            {{--                                        <style>--}}
                            {{--                                            .myCir {--}}
                            {{--                                                margin-right: 5px;--}}
                            {{--                                                width: 18px;--}}
                            {{--                                                height: 18px;--}}
                            {{--                                                line-height: 18px;--}}
                            {{--                                                background: #e6e6e6;--}}
                            {{--                                                color: #222222;--}}
                            {{--                                                border-radius: 100%;--}}
                            {{--                                                text-align: center;--}}
                            {{--                                                font-weight: 400;--}}
                            {{--                                                font-size: 12px;--}}
                            {{--                                                display: inline-block;--}}
                            {{--                                            }--}}
                            {{--                                        </style>--}}
                            {{--                                        <i class="fal fa-chevron-down"></i>--}}
                            {{--                                    </a>--}}
                            {{--                                    <ul class="sub_menu">--}}
                            {{--                                        <li class="menu-item-has-children"><a--}}
                            {{--                                                    href="{{route('Front.contact')}}">{{trans('front.contact')}}</a></li>--}}
                            {{--                                        <li class="menu-item-has-children"><a--}}
                            {{--                                                    href="{{url('chat')}}">{{trans('front.Technical support')}}</a>--}}
                            {{--                                        </li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                        </ul>
                    </div>
                    {{--                    <div class="offcanvas_footer">--}}
                    {{--                        <span><a href="#"><i class="fa fa-envelope-o"></i> mail@mail.com</a></span>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
{{--<!-- / mobile menu -->--}}
<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="language_currency">
                            <ul>
                                <li class="language"><a href="#"> {{trans('front.language')}} <i
                                                class="fal fa-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    @if(auth()->guard('user')->user())
                                        <a href="{{route('authors.logout')}}">{{trans('front.logout')}}</a>
                                    @else
                                        <a href="{{route('user.login')}}">{{trans('front.login')}}</a>
                                    @endif
                                </li>
                                {{--                                <li class="currency"><a href="#"> {{trans('front.Currency')}} <i class="fal fa-chevron-down"></i></a>--}}
                                {{--                                    <ul class="dropdown_currency">--}}
                                {{--                                        <li><a href="#"> جنية مصري </a></li>--}}
                                {{--                                        <li><a href="#"> US Dollar</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header_social text-right">
                            <ul>
                                <li><a href="{{$setting->twitter}}"><i class=" fab fa-twitter"></i></a></li>
                                <li><a href="mailto:{{$setting->gmail}}"><i class=" fab fa-google "></i></a></li>
                                <li><a href="https://wa.me/{{$setting->whats}}"><i class=" fab fa-whatsapp "></i></a>
                                </li>
                                <li><a href="{{$setting->facebook}}"><i class=" fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$setting->instagram}}"><i class=" fab fa-instagram "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                        <div class="logo">
                            <a href="{{route('Front.Home')}}"><img src="{{url('')}}/public/front/img/logo.png"
                                                                   alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-7 col-8">
                        <div class="header_right_info">
                            <div class="search_container mobail_s_none">
                                <form action="{{route('Front.search')}}" method="GET">
                                    <div class="hover_category">
                                        <select class="select_option" name="Category_id" id="categori2">
                                            <option selected value="0"> {{trans('front.all_categories')}} </option>
                                            @foreach($Categories as $Category)
                                                @if (app() -> getlocale() == 'ar')
                                                    <option value="{{ $Category->id }}" {{ $Category->id == request()->Category_id ? 'selected' : '' }}>{{ $Category->name_ar}}</option>
                                                @else
                                                    <option value="{{ $Category->id }}" {{ $Category->id == request()->Category_id ? 'selected' : '' }}>{{ $Category->name_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="search_box">
                                        <input placeholder="{{trans('front.search')}}" value="{{request()->search}}"
                                               name="search" type="text">
                                        <button type="submit"><span class="fal fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <div class="header_account_area">
                                @if(auth()->guard('user')->user())
                                    <div class="header_account_list register">
                                        <ul>
                                            <li>
{{--                                                <a href="{{url('authors/order')}}">Hi--}}
{{--                                                    - {{auth()->guard('user')->user()->first_name}} {{auth()->guard('user')->user()->last_name}} </a>--}}
{{--                                               --}}


                                                <a href="{{url('authors/order')}}" data-tippy="Hi - {{auth()->guard('user')->user()->first_name}}" >

                                                    @if(auth()->guard('user')->user()->photo == null)
                                                        <img src="{{url('')}}/public/front/img/user.gif" class="headerUserImg">
                                                    @else
                                                        <img src="{{url('')}}/{{auth()->guard('user')->user()->photo}}"
                                                             class="headerUserImg">
                                                    @endif
                                                </a>



                                            </li>
                                        </ul>
                                    </div>
                                @endif

                                <div class="header_account_list header_wishlist">
                                    @if(auth()->guard('user')->user())
                                        <a href="{{route('Favorite')}}"><span
                                                    class="fal fa-heart"></span>
                                            @else
                                                <a href="{{route('Favorite')}}"><span class="fal fa-heart"></span>
                                                    @endif
                                                    {{--                                                    @if($Favorites == null)--}}
                                                    {{--                                                        <span class="item_count">0</span>--}}
                                                    {{--                                                    @else--}}
{{--                                                    @if($Favorites > 0)--}}
                                                        <span id="fav_count" class="item_count">{{$Favorites}}</span>
{{--                                                    @endif--}}
                                                    {{--                                                    @endif--}}
                                                </a>
                                        </a>
                                </div>
                                <div class="header_account_list  mini_cart_wrapper">
                                    <a href="#!">
                                        <i class="fal fa-shopping-cart"></i>
{{--                                        @if($Carts > 0)--}}
                                        <span class="item_count" id="countItems">
                                                {{$Carts}}
                                            </span>
{{--                                        @endif--}}
                                    </a>
                                    <!--mini cart-->
                                    <div class="mini_cart" id="loadNewCart">
                                        @include('Front.load.cart')
                                    </div>
                                </div>
                                <div class="header_account_list">
                                    <a href="{{route('chat')}}">
                                        <i class="fal fa-comment-lines"></i>
{{--                                        @if($Chats > 0)--}}
                                        <span class="item_count" id="countChat">
                                                {{$Chats}}
                                            </span>
{{--                                        @endif--}}
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!--mini cart end-->

                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mobail_s_block">
                        <div class="search_container">
                            <form action="{{route('Front.search')}}" method="GET">
                                <div class="hover_category">
                                    <select class="select_option" name="Category_id" id="categori3">
                                        <option selected value="0"> {{trans('front.all_categories')}} </option>
                                        @foreach($Categories as $Category)
                                            @if (app() -> getlocale() == 'ar')
                                                <option value="{{ $Category->id }}" {{ $Category->id == request()->Category_id ? 'selected' : '' }}>{{ $Category->name_ar}}</option>
                                            @else
                                                <option value="{{ $Category->id }}" {{ $Category->id == request()->Category_id ? 'selected' : '' }}>{{ $Category->name_en}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="{{trans('front.search')}}" value="{{request()->search}}"
                                           name="search" type="text">
                                    <button type="submit"><span class="fal fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h5 class="categori_toggle"> {{trans('front.ebhar_library')}} </h5>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    <li class="menu_item_children"><a href="#!">{{trans('front.ebhar_library')}}<i
                                                    class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li class="menu_item_children"><a
                                                        href="{{route('publishing-houses',0)}}">{{trans('front.paper books')}}</a>
                                                <ul class="categorie_sub_menu">
                                                    @foreach($Categories as $Category)
                                                        @if (app() -> getlocale() == 'ar')
                                                            <li>
                                                                <a href="{{route('Front.booksFitterType',[$Category->id,0])}}">{{$Category->name_ar}}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('Front.booksFitterType',[$Category->id,0])}}">{{$Category->name_en}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="menu_item_children">
                                                {{-- <a href="{{route('showEBooks')}}">{{trans('front.digital books')}}</a>
                                                <ul class="categorie_sub_menu">
                                                    @foreach($Categories as $Category)
                                                        @if (app() -> getlocale() == 'ar')
                                                            <li>
                                                                <a href="{{route('Front.booksFitterType',[$Category->id,1])}}">{{$Category->name_ar}}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('Front.booksFitterType',[$Category->id,1])}}">{{$Category->name_en}}</a>
                                                            </li>

                                                        @endif
                                                    @endforeach
                                                </ul> --}}
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#!">{{trans('front.Book_Ratings')}} <i
                                                    class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_3">
                                            <li class="menu_item_children"><a
                                                        href="{{route('Front.books')}}">{{trans('front.most read')}}</a>
                                                <ul class="categorie_sub_menu">
                                                    @foreach($Categories as $Category)
                                                        @if (app() -> getlocale() == 'ar')
                                                            <li>
                                                                <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a
                                                        href="{{route('Front.books')}}">{{trans('front.recently added')}}</a>
                                                <ul class="categorie_sub_menu">
                                                    @foreach($Categories as $Category)
                                                        @if (app() -> getlocale() == 'ar')
                                                            <li>
                                                                <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a
                                                        href="{{route('Front.books')}}">{{trans('front.Best seller')}}</a>
                                                <ul class="categorie_sub_menu">
                                                    @foreach($Categories as $Category)
                                                        @if (app() -> getlocale() == 'ar')
                                                            <li>
                                                                <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_ar}}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{route('Front.booksFitter',$Category->id)}}">{{$Category->name_en}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!--main menu start-->
                        <div class="main_menu menu_position ">
                            <nav>
                                <ul>
                                    <li><a href="{{route('Front.Home')}}"> {{trans('front.home')}} </a></li>
                                    <li><a href="{{route('authors.index')}}"> {{trans('front.authors')}} </a></li>
                                    <li><a href="{{route('reviews')}}"> {{trans('front.reviews')}} </a></li>
                                    <li><a href="#"> {{trans('front.publishing')}} <i
                                                    class="fal fa-chevron-down"></i></a>
                                        <ul class="sub_menu">
{{--                                            <li><a href="{{url('publishing')}}">{{trans('front.E-Business')}}</a></li>--}}
                                            @if((auth()->guard('user')->user()))
                                                <li>
                                                    <a href="{{url('authors/add-book/paper')}}">{{trans('front.E-Publishing_paperwork')}}</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{route('authors.getlogin')}}">{{trans('front.E-Publishing_paperwork')}}</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li><a href="{{url('workshop')}}"> {{trans('front.workshop')}} </a></li>
                                    <li>
                                        <a href="{{url('publishing/Service')}}"> {{trans('front.publishingService')}} </a>
                                    </li>
                                    <li><a href="{{route('blogs')}}"> {{trans('front.blogs')}} </a></li>
                                    <li><a href="{{route('Front.contact')}}"> {{trans('front.contact')}} </a></li>

                                {{--                                <li class="menu-item-has-children">--}}
                                {{--                                    <a href="#"> {{trans('front.contact')}}--}}
                                {{--                                        @if(auth()->guard('user')->user())--}}
                                {{--                                        @if(App\Models\RoomChat::where('to',auth()->guard('user')->user()->id)->where('is_read',0)->count() > 0)--}}
                                {{--                                        <span class="myCir" id="countItems">--}}
                                <!--                                            --><?php //echo App\Models\RoomChat::where('to',auth()->guard('user')->user()->id)->where('is_read',0)->count() ?>
                                    {{--                                        </span>--}}
                                    {{--                                        @endif--}}
                                    {{--                                        @endif--}}
                                    {{--                                            <style>--}}
                                    {{--                                            .myCir {--}}
                                    {{--                                                margin-right: 5px;--}}
                                    {{--                                                width: 18px;--}}
                                    {{--                                                height: 18px;--}}
                                    {{--                                                line-height: 18px;--}}
                                    {{--                                                background: #f17179;--}}
                                    {{--                                                color: white;--}}
                                    {{--                                                border-radius: 100%;--}}
                                    {{--                                                text-align: center;--}}
                                    {{--                                                font-weight: 400;--}}
                                    {{--                                                font-size: 12px;--}}
                                    {{--                                                display: inline-block;--}}
                                    {{--                                            }--}}
                                    {{--                                        </style>--}}
                                    {{--                                        <i class="fal fa-chevron-down"></i>--}}
                                    {{--                                    </a>--}}
                                    {{--                                    <ul class="sub_menu">--}}
                                    {{--                                        <li class="menu-item-has-children"><a--}}
                                    {{--                                                    href="{{route('Front.contact')}}">{{trans('front.contact')}}</a></li>--}}
                                    {{--                                        <li class="menu-item-has-children"><a--}}
                                    {{--                                                    href="{{url('chat')}}">{{trans('front.Technical support')}}--}}
                                    {{--                                                @if(auth()->guard('user')->user())--}}
                                    {{--                                                @if(App\Models\RoomChat::where('to',auth()->guard('user')->user()->id)->where('is_read',0)->count() > 0)--}}
                                    {{--                                                    <span class="myCir" id="countItems">--}}
                                    {{--                                            <?php echo App\Models\RoomChat::where('to',auth()->guard('user')->user()->id)->where('is_read',0)->count() ?>--}}
                                    {{--                                        </span>--}}
                                    {{--                                                @endif--}}
                                    {{--                                                @endif--}}
                                    {{--                                            </a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    {{--                                </li>--}}
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- / header -->

