<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset($settings->logo) }}" alt="alia" class="img-fluid w-100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fal fa-bars menu_icom"></i>
            <i class="fal fa-times menu_close"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">{{trans('website.Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about_us') ? 'active' : '' }}"
                       href="{{ route('about_us') }}">{{trans('website.about us')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('services') ? 'active' : '' }}"
                       href="{{ route('services') }}">{{trans('website.services')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('galleries') ? 'active' : '' }}"
                       href="{{ route('galleries') }}">{{trans('website.gallery')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('contacts') ? 'active' : '' }}"
                       href="{{ route('contacts') }}">{{trans('website.contact')}}</a>
                </li>
            </ul>

            <ul class="menu_right d-flex flex-wrap">
                <li><a class="reservation" href="#" data-bs-toggle="modal"
                       data-bs-target="#staticBackdrop">{{trans('website.reservation')}}</a></li>
                <li class="dropdown btn-lang" style="z-index: 100000;">
                    <button onclick="setLocale('ar')" class="btn-language dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(lang() == 'ar')
                            <img src="{{asset('assets/front')}}/images/arabic.png">
                        @else
                            <img src="{{asset('assets/front')}}/images/english.png">
                        @endif
                        {{ (lang() == 'ar') ? 'العربية' : 'english' }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @if(lang() == 'ar')
                            <li><a class="dropdown-item btn-language btn-color"
                                   href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                    <img src="{{asset('assets/front')}}/images/english.png">
                                    english
                                </a>
                            </li>
                        @else
                            <li><a class="dropdown-item btn-language btn-color"
                                   href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                    <img src="{{asset('assets/front')}}/images/arabic.png">
                                    العربية
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
