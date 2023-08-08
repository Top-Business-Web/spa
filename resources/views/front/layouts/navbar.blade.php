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
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about_us') ? 'active' : '' }}"
                        href="{{ route('about_us') }}">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('services') ? 'active' : '' }}"
                        href="{{ route('services') }}">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('galleries') ? 'active' : '' }}"
                        href="{{ route('galleries') }}">gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('contacts') ? 'active' : '' }}"
                        href="{{ route('contacts') }}">contact</a>
                </li>
            </ul>

            <ul class="menu_right d-flex flex-wrap">
                <li><a class="reservation" href="#" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">reservation</a></li>
            </ul>
        </div>
    </div>
</nav>
