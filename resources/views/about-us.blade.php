<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vit-gallery.css') }}">
    <link rel="shortcut icon" type="text/css" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
<!-- HEADER -->
<header class="header-sky">
    <div class="container">
        <!--HEADER-TOP-->
        <div class="header-top no-border">
            @include('partials.header-top')
        </div>
        <!-- END/HEADER-TOP -->
    </div>
    <!-- MENU-HEADER -->
    <div class="menu-header ">
        <nav class="navbar navbar-fixed-top bg-menu">
            <div class="container">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('index') }}" title="Skyline"><img src="images/Home/sky-logo-header.png" alt="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    @include('partials.menu')
                </div>
            </div>
        </nav>
    </div>
    <!-- END / MENU-HEADER -->
</header>
<!-- END-HEADER -->
<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>About Us</h2>
            <p>Crafting Unforgettable Moments for You</p>
        </div>
    </div>
</section>
<!-- MAP -->
<!-- ABOUT -->
<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="wrap-about">
                <!-- ITEM -->
                <div class="about-item">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding-right">
                        <!-- SLIDER -->
                        <div class="section-slider height-v-about">
                            <div id="index12" class="owl-carousel  owl-theme">
                                <div class="item">
                                    <img alt="Third slide" src="images/About/about.jpg" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img alt="Third slide" src="images/About/about-1.jpg" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <!-- END / SLIDER -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding-left">
                        <div class="text">
                            <h2 class="heading">ABOUT US</h2>
                            <div class="desc">
                                <p>Welcome to Skyline - your premier destination for banquet and farm house bookings! At Skyline, we're passionate about creating unforgettable experiences for our guests. Our commitment to excellence shines through in every aspect of our service, from our meticulously curated venues to our dedicated team of professionals. With years of industry expertise, we take pride in offering top-notch facilities and personalized assistance to ensure your event exceeds expectations. Discover the Skyline difference and let us be a part of your special occasions. Learn more about our story, mission, and values on our About Us page. Experience the Skyline difference and elevate your event experience today!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END / ITEM -->
                <!-- ITEM -->
                <div class="about-item about-right">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  no-padding-left col-lg-push-6 col-md-push-6 ">
                        <div class="img">
                            <img src="images/About/about-1.jpg" alt="#" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding-right col-lg-pull-6 col-md-pull-6">
                        <div class="text">
                            <h2 class="heading">WHY YOU CHOOSE SKYLINE?</h2>
                            <div class="desc">
                                <p>Choosing Skyline means selecting excellence, sophistication, and unwavering commitment to your event's success. At Skyline, we offer a distinctive blend of premium venues, personalized service, and attention to detail that sets us apart. Our team of dedicated professionals is passionate about creating memorable experiences tailored to your unique vision. Whether it's a grand celebration, an intimate gathering, or a corporate event, Skyline ensures every aspect is executed flawlessly. With a reputation for excellence and a track record of exceeding expectations, choosing Skyline guarantees an elevated event experience that leaves a lasting impression. Experience the difference with Skyline and elevate your event to new heights.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END / ITEM -->
            </div>
        </div>
    </div>
</section>
<!-- END / ABOUT -->
<!-- HOTEL STATISTICS -->
<section class="section-statistics ">
    <div class="container">
        <div class="statistics">
            <h2 class="heading text-center">Our statistics</h2>
            <div class="statistics_content">
                <div class="row">
                    <!-- ITEM -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col">
                        <div class="item">
                            <span class="count">100</span>
                            <span>Banquet Halls</span>
                        </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- ITEM -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col">
                        <div class="item">
                            <span class="count">150</span>
                            <span>Farm Houses</span>
                        </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- ITEM -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col">
                        <div class="item">
                            <span class="count">5000</span>
                            <span>Clients</span>
                        </div>
                    </div>
                    <!-- END ITEM -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / HOTEL STATISTICS -->
<!--FOOTER-->
@include('partials.footer')
<!-- END / FOOTER-->
<!--SCOLL TOP-->
<a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--END / SROLL TOP-->
<!-- LOAD JQUERY -->
<script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vit-gallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.appear.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.littlelightbox.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="{{ asset('js/sky.js') }}"></script>
</body>
</html>
