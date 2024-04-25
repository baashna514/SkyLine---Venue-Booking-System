<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Venues</title>
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
<!-- BANNER -->
<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>Most Searched Venues</h2>
            <p>When you host a party or family reunion, the special celebrations let you streng then bonds with</p>
        </div>
    </div>
</section>
<!-- END-BANNER -->
<!-- BODY-ROOM-1 -->
<section class="body-room-1 ">
    <div class="container">
        <div class="blog">
            <div class="row">
                <div class=" col-lg-8 col-md-8 col-md-push-4">
                    <div class="room-wrap-1">
                        <div class="row">
                            @foreach($venues as $venue)
                                <!-- ITEM -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="room-item-1">
                                        <h2><a href="{{ route('venue-detail', ['id' => $venue->id]) }}">{{ $venue->title }}</a></h2>
                                        <div class="img">
                                            <a href="{{ route('venue-detail', ['id' => $venue->id]) }}"><img src="{{ \Illuminate\Support\Facades\Storage::url($venue->thumbnail) }}" alt="#"></a>
                                        </div>
                                        <div class="content">
                                            <ul>
                                                <li>Baths: {{ isset($venue->baths)?$venue->baths:'--' }}</li>
                                                <li>Parking: {{ isset($venue->parking)?$venue->parking:'--' }}</li>
                                                <li>Area: {{ isset($venue->size)?$venue->size:'--' }}</li>
                                                <li>Min Persons: {{ isset($venue->min_persons)?$venue->min_persons:'--' }}</li>
                                            </ul>
                                        </div>
                                        <div class="bottom">
                                            <span class="price">Starting <span class="amout">${{ $venue->starting_price }}</span> /event</span>
                                            <a href="#" class="btn">CALL US</a>
                                            <a href="#" class="btn">BOOKING</a>
                                            <a href="{{ route('venue-detail', ['id' => $venue->id]) }}" class="btn">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            @endforeach
                        </div>
                        <!-- PAGE NAVIGATION   -->
                        <ul class="page-navigation text-center">
                            <li class="first"><a href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="current-page"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">15</a></li>
                            <li class="last"><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- END / PAGE NAVIGATION   -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-pull-8">
                    <div class="sidebar">
                        <!-- WIDGET CHECK AVAILABILITY -->
                        <div class="widget widget_check_availability">
                            <h4 class="widget-title">YOUR RESERVATION</h4>
                            <div class="check_availability">
                                <h6 class="check_availability_title">your stay dates</h6>
                                <div class="check_availability-field">
                                    <label>Start</label>
                                    <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                        <input class="form-control wrap-box" type="text" placeholder="Start Date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"  aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="check_availability-field">
                                    <label>End</label>
                                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                        <input class="form-control wrap-box" type="text" placeholder="End Date">
                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <h6 class="check_availability_title">VENUE TYPES</h6>
                                <div class="check_availability-field">
                                    <label>VENUES</label>
                                    <select class="awe-select">
                                        <option value="">Choose</option>
                                        <option value="farm_houses">Farm Houses</option>
                                        <option value="banquet_halls">Banquet Halls</option>
                                    </select>
                                </div>
                                <h6 class="check_availability_title">LOCATION</h6>
                                <div class="check_availability-field">
                                    <label>CITIES</label>
                                    <select class="awe-select">
                                        <option value="">Choose</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn-room btn">CHECK AVAILABLE</button>
                            </div>
                        </div>
                        <!-- END / WIDGET CHECK AVAILABILITY -->
                        <!-- WIDGET CATEGORIES -->
                        <div class="widget widget_categories">
                            <h4 class="widget-title">CITIES</h4>
                            <ul>
                                @foreach($cities as $city)
                                    <li><a href="{{ $city->id }}">{{ $city->title }} &nbsp; ({{ $city->venues_count }})</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- END / WIDGET CATEGORIES -->
                        <!-- END / WIDGET SOCIAL -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END/BODY-ROOM-1-->
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
