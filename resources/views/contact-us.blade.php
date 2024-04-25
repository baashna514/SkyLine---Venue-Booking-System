<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
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
            <h2>Contact us</h2>
            <p>Get in Touch with Us Today!</p>
        </div>
    </div>
</section>
<!-- CONTACT -->
<section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="text">
                        <h2>Contact</h2>
                        <p>Welcome to Skyline's Contact Us page! We're dedicated to providing exceptional service for your banquet and farm house booking needs. Have questions about our venues, services, or availability? Need assistance with planning your event? Our friendly team is here to help! Feel free to reach out to us via phone, email, or the contact form below. We value your feedback and are committed to ensuring your experience with Skyline is seamless and memorable. Connect with us today and let's bring your event vision to life!</p>
                        <ul>
                            <li><i class=" fa ion-ios-location-outline"></i> Rayadh</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +966 555 556</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="" class="__cf_email__" data-cfemail="d4bcb1b8b8bb94a7bfadb8bdbab1bcbba0b1b8fab7bbb9">hello@skyline.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-lg-offset-1">
                    <div class="contact-form">
                        <form action="https://landing.engotheme.com/html/skyline/demo/send_mail_contact.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="name" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="email" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="field-text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-sm-12">
                                    <textarea cols="30" rows="10" name="message" class="field-textarea" placeholder="Write what do you want"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-room">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / CONTACT -->
<!-- MAP -->
<div class="section-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463878.29488595825!2d46.82252880000001!3d24.725191849999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2s!4v1711308545252!5m2!1sen!2s" width="600" height="470" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- END / MAP -->
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
