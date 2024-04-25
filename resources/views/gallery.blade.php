<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
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
                    <a class="navbar-brand" href="{{ route('home') }}" title="Skyline"><img src="images/Home/sky-logo-header.png" alt="#"></a>
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
            <h2>GALLERY</h2>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
        </div>
    </div>
</section>
<!-- OUR-GALLERY-->
<div class="gallery-our wrap-gallery-restaurant gallery_1">
    <div class="container">
        <div class="gallery gallery-restaurant">
            <ul class="nav nav-tabs text-uppercase">
                <li class="active"><a data-toggle="tab" href="#all">ALL</a></li>
                <li><a data-toggle="tab" href="#dinner">BANQUET HALLS  </a></li>
                <li><a data-toggle="tab" href="#lunch">FARM HOUSES  </a></li>
            </ul>
            <br/>
            <div class="tab-content">
                <div id="all" class="tab-pane fade in active">
                    <div class="product ">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="gallery_product col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box-1">
                                        <div class="box-img">
                                            <a class="lightbox " href="{{ \Illuminate\Support\Facades\Storage::url($image->image_url) }}" data-littlelightbox-group="gallery" title="HIHI">
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($image->image_url) }}" class="img-responsive" alt="Product" title="images products"></a>
                                            <p>{{ $image->title }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="dinner" class="tab-pane fade">
                    <div class="product ">
                        <div class="row">
                            @foreach($banquet as $hall)
                                <div class="gallery_product col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box-1">
                                        <div class="box-img">
                                            <a class="lightbox " href="{{ \Illuminate\Support\Facades\Storage::url($hall->image_url) }}" data-littlelightbox-group="gallery" title="HIHI">
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($hall->image_url) }}" class="img-responsive" alt="Product" title="images products"></a>
                                            <p>{{ $hall->title }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="lunch" class="tab-pane fade">
                    <div class="product ">
                        <div class="row">
                            @foreach($farmhouses as $farmhouse)
                                <div class="gallery_product col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box-1">
                                        <div class="box-img">
                                            <a class="lightbox " href="{{ \Illuminate\Support\Facades\Storage::url($farmhouse->image_url) }}" data-littlelightbox-group="gallery" title="HIHI">
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($farmhouse->image_url) }}" class="img-responsive" alt="Product" title="images products"></a>
                                            <p>{{ $farmhouse->title }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-tab-content -->
        </div>
        <!-- /gallery -->
    </div>
    <!-- /container -->
</div>
<!-- END / OUR GALLERY -->
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
