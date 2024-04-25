<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
    <style>
        .centered-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: rgba(240, 248, 255, 0.61);
            padding-top: 100px;
            height: 100px;
            border-radius: 5px;
            padding-left: 50px;
        }

        .date-title {
            width: 200px;
        }

    </style>
</head>

<body>
<!-- HEADER -->
<header class="header-sky">
    <div class="container">
        <!--HEADER-TOP-->
        <div class="header-top">
            @include('partials.header-top')
        </div>
        <!-- END/HEADER-TOP -->
    </div>
    <!-- MENU-HEADER -->
    <div class="menu-header">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
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
<!-- SLIDER -->
<section class="section-slider height-v">
    <div id="index12" class="owl-carousel  owl-theme">
        <div class="item">
            <img alt="Third slide" src="{{ asset('images/Home/Slider-v1.jpg') }}" class="img-responsive">
            <div class="carousel-caption">
                <h1>Welcome to Skyline</h1>
                <p><span class="line-t"></span>Halls & Farm Houses<span class="line-b"></span></p>
            </div>
        </div>
        <div class="item">
            <img alt="Third slide" src="{{ asset('images/Home/Slider-v2.jpg') }}" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="v2">Enjoy a Luxury  Experience</h1>
                    <p class="p-v2"><span class="line-t"></span>Halls & Farm Houses<span class="line-b"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="check-avail">
        <div class="container" style="display: flex;justify-content: center;align-items: center;height: 100%;">
                <form action="{{ route('venues-search') }}" method="post">
                    @csrf
                    <div class="centered-wrapper">
                        <div class="date-title">
                            <select class="form-control" name="type">
                                <option value="">Choose Type</option>
                                <option value="farmhouse">Farm Houses</option>
                                <option value="banquet">Banquet Halls</option>
                            </select>
                        </div>
                        <div class="date-title">
                            <select class="form-control" name="city">
                                <option value="">Choose City</option>
                                @foreach(\App\Models\City::all() as $city)
                                    <option value="{{ $city->title }}">{{ $city->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="date-title">
                            <button class="btn btn-primary">Check Availablity</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</section>
<!-- END / SLIDER -->
<!-- OUR-ROOMS-->
<section class="rooms">
    <div class="container">
        <h2 class="title-room">Most Searched Venues</h2>
        <div class="outline"></div>
        <p class="rooms-p">When you host a party or family reunion, the special celebrations let you streng then bonds with</p>
        <div class="wrap-rooms">
            <div class="row">
                <div id="rooms">
                    @if(count($venues))
                        <div class="item">
                            @foreach($venues as $venue)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <a href="{{ route('venue-detail', ['id' => $venue->id]) }}"><img src="{{ \Illuminate\Support\Facades\Storage::url($venue->thumbnail) }}" class="img-responsive" alt="PLuxury Room" title="Luxury Room"></a>
                                    </div>
                                    <div class="rooms-content">
                                        <a href="{{ route('venue-detail', ['id' => $venue->id]) }}"><h4 class="sky-h4">{{ $venue->title }}</h4></a>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-4 price"><i class="fa fa-home"></i> 5 Kanals</div>
                                            <div class="col-lg-4 price"><i class="fa fa-bath"></i> 25 Baths</div>
                                            <div class="col-lg-4 price"><i class="fa fa-car"></i> 500</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <p>No record found.</p>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('venues', ['type' => null, 'param' => null]) }}" type="button" class="btn btn-default btn-venues">VIEW MORE</a>
            </div>
        </div>
    </div>
    <!-- /container -->
</section>
<!-- END / ROOMS -->
<!-- ABOUT-US-->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <div class="about-centent">
                    <h2 class="about-title">About Us</h2>
                    <div class="line"></div>
                    <p class="about-p">Contrary to popular belief, Lorem isn’t simply random text. It has roots in a of classical Latin literature from 45 BC, making it over 2000 years old. Avalon’s leading hotels with gracious island hospitality, thoughtful amenities and distinctive</p>
                    <p class="about-p1">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage ...</p>
                    <a href="#" class="read-more">READ MORE </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 ">
                <div class="about-img">
                    <div class="img-1">
                        <img src="{{ asset('images/Home/about-3.jpg') }}" class="img-responsive" alt="Image">
                        <div class="img-2">
                            <img src="{{ asset('images/Home/about-1.jpg') }}" class="img-responsive" alt="Image">
                        </div>
                        <div class="img-3">
                            <img src="{{ asset('images/Home/about-2.webp') }}" class="img-responsive about-img" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END/ ABOUT-US-->
<!-- BEST -->
<section class="best">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-1.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Master Bedrooms</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-2.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Sea View Balcony</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-3.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Pool & Spa</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-4.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Wifi Coverage</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-5.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">AwESOME pACKAGES</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-6.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">cLEANING eVERDAY</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-7.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">bUTFFET Breakfast</h6>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="wrap-best">
                    <div class="icon-best">
                        <img src="images/Home/about-icon-8.png" class="img-responsive" alt="Image">
                    </div>
                    <h6 class="sky-h6">Airport Taxi</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / BEST -->
<!-- TESTIMONOALS -->
<section class="testimonials">
    <div class="testimonials-h">
        <div class="testimonials-content">
            <div class="container">
                <div id="testimonials" class="owl-carousel owl-theme">
                    <div class="item ">
                        <div class="img-testimonials"><img src="images/Home/Testimonials.png" alt="#"></div>
                        <p class="testimonials-p"><span>“</span>​‌ This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                        <h5 class="sky-h5">Harry</h5>
                        <p class="testimonials-p1">From Los Angeles, California</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / TESTIMONOALS -->

<!-- OUR-GALLERY-->
<section class="gallery-our">
    <div class="container-fluid">
        <div class="gallery">
            <h2 class="title-gallery">Our Gallery</h2>
            <div class="outline"></div>
            <br/>
            <div class="tab-content">
                <div id="Hotel" class="tab-pane fade in active">
                    <div class="product ">
                        <div class="row">
                            @foreach($gallery as $image)
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <div class="wrap-box">
                                    <div class="box-img">
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($image->image_url) }}" class="img-responsive" alt="Product" title="images products">
                                    </div>
                                    <div class="gallery-box-main " title>
                                        <div class="gallery-icon">
                                            <a class="lightbox " href="{{ \Illuminate\Support\Facades\Storage::url($image->image_url) }}" data-littlelightbox-group="gallery" title="Luxury Room view all"><i class="ion-ios-plus-empty" aria-hidden="true" ></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-tab-content -->
            <div class="text-center">
                <a href="{{ route('gallery') }}" class="btn btn-default btn-our">VIEW MORE</a>
            </div>
        </div>
        <!-- /gallery -->
    </div>
    <!-- /container -->
</section>
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
