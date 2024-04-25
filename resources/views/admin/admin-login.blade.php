<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline - Admin Login</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->


<!-- ================================
    START COUNTDOWN AREA
================================= -->
<section class="coming-container">
    <div class="coming-inner d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="coming-soon-content">
                        <div class="logo justify-content-center pb-3">
                            <img src="{{ asset('images/Home/sky-logo-header.png') }}" alt="logo">
                        </div><!-- end logo -->
                        <div class="contact-form-action py-4">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input type="hidden" value="true" name="is_admin">
                                <div class="row">
                                    <div class="col-lg-6 mx-auto">
                                        <div class="input-box text-left">
                                            <label class="label-text text-white">Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope form-icon"></span>
                                                <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                        <div class="input-box text-left">
                                            <label class="label-text text-white">Password</label>
                                            <div class="form-group">
                                                <span class="la la-lock-open form-icon"></span>
                                                <x-text-input id="password" class="form-control block mt-1 w-full"
                                                              type="password"
                                                              name="password"
                                                              required autocomplete="current-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                            </div>
                                        </div>
                                        <div class="input-box text-left">
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                        <ul class="social-profile social--profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- end coming-soon-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section><!-- end countdown-area -->
<!-- ================================
    END COUNTDOWN AREA
================================= -->

<div id="fullscreen-slide-contain">
    <ul class="slides-container">
        <li><img src="images/hero-bg.jpg" alt=""></li>
        <li><img src="images/hero-bg2.jpg" alt=""></li>
        <li><img src="images/hero-bg5.jpg" alt=""></li>
    </ul>
</div><!-- End background slider -->

<!-- Template JS Files -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script src="js/superslider-script.js"></script>
<script src="js/countdown.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/trizen/html/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 12:25:27 GMT -->
</html>
