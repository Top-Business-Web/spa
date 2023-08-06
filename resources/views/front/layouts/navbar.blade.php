<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/front') }}/images/logo.png" alt="alia" class="img-fluid w-100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fal fa-bars menu_icom"></i>
            <i class="fal fa-times menu_close"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">contact</a>
                </li>
            </ul>
            <ul class="menu_right d-flex flex-wrap">
                <li><a class="reservation" href="#" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">reservation</a></li>
            </ul>
        </div>
    </div>
</nav>
