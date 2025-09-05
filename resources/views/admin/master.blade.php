<!DOCTYPE html>
<html>
@include('admin.partials.head')

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    <!-- sidenav  -->
    @include('admin.partials.aside')
    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        @include('admin.partials.navbar')
        <!-- end Navbar -->
        @yield('content')

        @include('admin.partials.footer')
    </main>

</body>
@include('admin.partials.scripts')

</html>
