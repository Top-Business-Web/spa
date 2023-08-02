<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{ asset('favicon.png') }}" class="header-brand-img light-logo1"
                 alt="logo">
        </a>
{{--
    {{ ($setting->logo) }}
    --}}
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">Admins</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('about_us.index') }}">
                <i class="fe fe-book side-menu__icon"></i>
                <span class="side-menu__label">About Us</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('contacts.index') }}">
                <i class="fe fe-book side-menu__icon"></i>
                <span class="side-menu__label">Contacts</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('gellaries.index') }}">
                <i class="fe fe-book side-menu__icon"></i>
                <span class="side-menu__label">Gellaries</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('services.index') }}">
                <i class="fe fe-book side-menu__icon"></i>
                <span class="side-menu__label">Services</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>
