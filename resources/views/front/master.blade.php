<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')


<body>
    <!-- Topbar Start -->
    @include('front.partials.tapbar')

    <!-- Topbar End -->

    {{-- ====================================== --}}

    <!-- Navbar Start -->
    @include('front.partials.navbar')

    <!-- Navbar End -->
    {{-- ====================================== --}}

    <!-- Header Start -->
    @if (View::getSection('custom_header'))
        @yield('custom_header')
    @else
        @include('front.partials.header')
    @endif


    <!-- Header End -->
    {{-- ====================================== --}}

    @yield('content')


    {{-- ====================================== --}}

    <!-- Footer Start -->
    @include('front.partials.footer')

    <!-- Footer End -->
    {{-- ====================================== --}}


    <!-- Back to Top -->
    @include('front.partials.scripts')
</body>

</html>
