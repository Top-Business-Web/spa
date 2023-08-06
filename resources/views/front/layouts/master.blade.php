<!DOCTYPE html>
<html lang="en">

@include('front.layouts.header')

<body>

    @include('front.layouts.top_bar')

    @include('front.layouts.navbar')

    @yield('content')

    @include('front.layouts.footer')

    @include('front.layouts.scripts')

</body>

</html>
