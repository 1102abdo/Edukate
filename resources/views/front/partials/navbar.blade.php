    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="{{ route('front.index') }}" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('front.index') }}" class="nav-item nav-link @yield('home-active') ">Home</a>
                    <a href="{{ route('front.about') }}" class="nav-item nav-link @yield('about-active')">About</a>
                    <a href="{{ route('front.courses') }}" class="nav-item nav-link @yield('courses-active')">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">Course Detail</a>
                            <a href="{{ route('front.team') }}" class="dropdown-item @yield('team-active')">Instructors</a>
                            <a href="{{ route('front.testmonials') }}" class="dropdown-item @yield('testmonials-active')">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ route('front.contact') }}" class="nav-item nav-link @yield('contact-active')">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join Us</a>
            </div>
        </nav>
    </div>