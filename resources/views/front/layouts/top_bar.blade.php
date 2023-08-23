<section class="tf__topbar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-9">
                <ul class="tf__topbar_left d-flex flex-wrap">
                    <li>
                        <p><i class="fas fa-map-marker-alt"></i> {{ lang() == 'ar' ? $settings->address_ar :$settings->address }}</p>
                    </li>
                    <li><a href="mailto:{{ $settings->email }}"><i class="fas fa-envelope"></i>
                        {{ $settings->email }}</a></li>
                    <li><a href="callto:{{ $settings->phone }}"><i class="fas fa-phone-alt"></i> {{ $settings->phone }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-3">
                <ul class="tf__topbar_right d-flex flex-wrap">
                    <li>
                        <a href="{{ $settings->social_links['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="{{ $settings->social_links['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="{{ $settings->social_links['twitter'] }}"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{ $settings->social_links['pinterest'] }}"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                    <li>
                        <a href="{{ $settings->social_links['instagram'] }}"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
