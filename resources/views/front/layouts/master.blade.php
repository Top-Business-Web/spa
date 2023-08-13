<!DOCTYPE html>
<html lang="en">

@include('front.layouts.header')

<body>

    @include('front.layouts.top_bar')

    @include('front.layouts.navbar')

    @include('front.layouts.reservation_modal')

    @yield('content')

    @include('front.layouts.footer')

    @include('front.layouts.scripts')
    @yield('js')

</body>

</html>
