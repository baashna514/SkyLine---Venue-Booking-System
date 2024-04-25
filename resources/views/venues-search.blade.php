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
                        <spapartialsn class="icon-bar "></spapartialsn>
                    </button>
                    <a class="navbar-brand" href="{{ route('index') }}" title="Skyline"><img src="{{ asset('images/Home/sky-logo-header.png') }}" alt="#"></a>
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
            <h2>Our Venues</h2>
            <p>When you host a party or family reunion, the special celebrations let you streng then bonds with</p>
        </div>
    </div>
</section>
<!-- BLOG -->
<div class="section-blog ">
    <div class="container">
        <div class="blog">
            <div class="row">
                <div class=" col-lg-8 col-md-8 col-md-push-4">
                    <div class="blog-content">
                        <!-- POST ITEM -->
                        <div class="row">
                            @if(count($venues))
                                @foreach($venues as $venue)
                            <div class="col-lg-6">
                                <article class="post">
                                    <div class="entry-media">
                                        <a href="{{ route('venue-detail', ['id' => $venue->id]) }}" class="post-thumbnail hover-zoom"><img src="{{ \Illuminate\Support\Facades\Storage::url($venue->thumbnail) }}" alt="#" style="width: 100%;"></a>
                                    </div>
                                    <div class="entry-header clearfix">
                                        <h2 class="entry-title pull-left"><a href="{{ route('venue-detail', ['id' => $venue->id]) }}">{{ $venue->title }}</a></h2>
                                    </div>
                                    <div style="margin-top: 10px;margin-bottom: -20px;">
                                        <a href="{{ route('venue-detail', ['id' => $venue->id]) }}" class="btn-room btn">View Details</a>
                                        <a href="#" class="btn-room btn"><i class="fa fa-phone"></i> Call Us</a>
                                        <a href="#" class="btn-room btn">Request for Booking</a>
                                    </div>
                                    <div class="entry-footer">
                                        <p class="entry-meta">
                                        <span class="entry-author">
                                            <span class="screen-reader-text">Starting from </span>
                                            <a href="#" class="entry-author-link">
                                                <span class="entry-author-name">${{ isset($venue->starting_price)?$venue->starting_price:"--" }}</span>
                                            </a>
                                        </span>
                                            <span class="entry-tags">
                                            <span class="screen-reader-text"><i class="fa fa-home" aria-hidden="true"></i></span>
                                            <a href="#">{{ isset($venue->size)?$venue->size:"--" }}</a>
                                            <span class="screen-reader-text" style="margin-left: 10px;"><i class="fa fa-bath" aria-hidden="true"></i></span>
                                            <a href="#">{{ isset($venue->baths)?$venue->baths:"--" }}</a>
                                            <span class="screen-reader-text" style="margin-left: 10px;"><i class="fa fa-car" aria-hidden="true"></i></span>
                                            <a href="#">{{ isset($venue->parking)?$venue->parking:"--" }}</a>
                                        </span>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                            @else
                                <p style="padding-top: 50px; text-align: center;">No record found.</p>
                            @endif
                        </div>
                        <!-- END / POST ITEM -->

                        <!-- PAGE NAVIGATION   -->
                        <ul class="page-navigation">
                            <li>{{ $venues->links() }}</li>
                        </ul>
                        <!-- END / PAGE NAVIGATION   -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-md-pull-8">
                    <div class="sidebar">
                        <!-- WIDGET CHECK AVAILABILITY -->
                        <form action="{{ route('venues-search') }}" method="post">
                            @csrf
                            <div class="widget widget_check_availability">
                            <h4 class="widget-title">YOUR RESERVATION</h4>
                            <div class="check_availability">
                                <h6 class="check_availability_title">VENUE TYPES</h6>
                                <div class="check_availability-field">
                                    <label>VENUES</label>
                                    <select class="awe-select" name="type">
                                        <option value="">Choose</option>
                                        <option value="farmhouse" {{ $selected_type == 'farmhouse'?'selected':'' }}>Farm Houses</option>
                                        <option value="banquet" {{ $selected_type == 'banquet'?'selected':'' }}>Banquet Halls</option>
                                    </select>
                                </div>
                                <h6 class="check_availability_title">LOCATION</h6>
                                <div class="check_availability-field">
                                    <label>CITIES</label>
                                    <select class="awe-select" name="city">
                                        <option value="">Choose</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->title }}" {{ $selected_city == $city->title?'selected':'' }}>{{ $city->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn-room btn" type="submit">CHECK AVAILABLE</button>
                            </div>
                        </div>
                        </form>
                        <!-- END / WIDGET CHECK AVAILABILITY -->
                        <!-- WIDGET CATEGORIES -->
                        <div class="widget widget_categories">
                            <h4 class="widget-title">CITIES</h4>
                            <ul>
                                @foreach($cities as $city)
                                    <li><a href="{{ route('venues', ['type' => 'city', 'param' => $city->title]) }}">{{ $city->title }} &nbsp; ({{ $city->venues_count }})</a></li>
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
</div>
<!-- END / BLOG -->
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
