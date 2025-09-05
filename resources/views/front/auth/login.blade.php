<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('assets-front') }}/auth/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets-front') }}/auth/css/style.css">
</head>

<body>

    <div class="main">

        <section class="signup">

            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="{{ route('front.login') }}">
                        @csrf
                        <h2 class="form-title">Login</h2>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" value="{{ old('email') }}"
                                placeholder="Your Email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" value="{{ old('password') }}"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login" />
                        </div>
                    </form>
                    <p class="loginhere">
                        I need Register ? <a href="{{ route('front.register') }}" class="loginhere-link">register
                            here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('assets-front') }}/auth/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets-front') }}/auth/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
