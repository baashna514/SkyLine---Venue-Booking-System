<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Venue Detail</title>
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
        .review {
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .review:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .review .info {
            margin-bottom: 10px;
        }

        .review .info span {
            margin-right: 10px;
            color: #888;
        }

        .review .name {
            font-weight: bold;
        }

        .review p {
            margin-bottom: 10px;
        }

        .add-review {
            margin-top: 20px;
        }

        .add-review textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            resize: vertical;
        }
    </style>
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
            <h2>{{ $venue->title }}</h2>
            <p>When you host a party or family reunion, the special celebrations let you streng then bonds with</p>
        </div>
    </div>
</section>
<!-- ROOM DETAIL -->
<section class="section-product-detail">
    <div class="container">
        <!-- DETAIL -->
        <div class="product-detail margin" style="border-bottom: 1px solid #e4e4e4;padding-bottom: 40px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="py-3" style="text-align: center;">
                        @include('admin.partials.messages')
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <!-- LAGER IMGAE -->
                    <div class="wrapper">
                        <div class="product-detail_overview">
                            <h5 class='text-uppercase'>{{ $venue->title }}</h5>
                            <p><i class="fa fa-map-pin"></i> {{ $venue->address }}</p>
                            <p>Type: <b>{{ $venue->type }}</b></p>
{{--                            <button class="btn btn-room btn-product" style="margin-top: 5px;">Request Pricing</button>--}}
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <h6>Details</h6>
                                    <ul>
                                        <li>Size: {{ isset($venue->type)?$venue->type:'Nil' }} <i class="la la-building"></i></li>
                                        <li>Max: {{ isset($venue->max_persons)?$venue->max_persons:'Nil' }} <i class="la la-users"></i></li>
                                        <li>Parking: {{ isset($venue->parking)?$venue->parking:'Nil' }} <i class="la la-car"></i></li>
                                        <li>Baths: {{ isset($venue->baths)?$venue->baths:'Nil' }} <i class="la la-building"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($venue->gelleries as $gallery)
                                <!-- ITEM -->
                                <div class="col-sm-6 col-md-3 col-lg-3">
                                    <div class="product-detail_item">
                                        <div class="img">
                                            <a href="#"><img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->image_url) }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            @endforeach
                        </div>
                    </div>
                    <!-- END / LAGER IMGAE -->
                </div>
                <div class="col-lg-3">
                    <!-- FORM BOOK -->
                    <div class="product-detail_book">
                        <div class="product-detail_total">
                            <img src="{{ asset('images/Product/icon.png') }}" alt="#" class="icon-logo">
                            <h6>STARTING FROM</h6>
                            <p class="price">
                                <span class="amout">${{ $venue->starting_price }}</span> / event
                            </p>
                        </div>
                        <div class="product-detail_form">
                            @if(!\Illuminate\Support\Facades\Auth::user())
                                <p class="text-danger" style="margin-top: 10px;text-align: center;font-size: 16px;">You must be logged in to book venue.</p>
                            @endif
                            <form action="{{ route('venue-booking') }}" method="post">
                                @csrf
                                <input type="hidden" name="venue_id" value="{{ $venue->id }}">
                                <div class="sidebar">
                                    <!-- WIDGET CHECK AVAILABILITY -->
                                    <div class="widget widget_check_availability">
                                        <div class="check_availability">
                                            <div class="check_availability-field">
                                                <div class="input-group">
                                                    <input class="form-control wrap-box" type="text" name="name" placeholder="Full Name" required>
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <div class="input-group">
                                                    <input class="form-control wrap-box" type="text" name="phone" placeholder="Phone Number" required>
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <div class="input-group">
                                                    <input class="form-control wrap-box" type="email" name="email" placeholder="Email (Optional)">
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <div class="input-group" style="width:100%;">
                                                    <input class="form-control wrap-box" type="date" name="event_date" required>
{{--                                                    <span class="input-group-addon"><i class="fa fa-calendar"  aria-hidden="true"></i></span>--}}
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <div class="input-group">
                                                    <input class="form-control wrap-box" type="text" name="persons" placeholder="Number of Geusts" required>
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <div class="input-group">
                                                    <textarea class="form-control" cols="100" rows="5" name="details" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / WIDGET CHECK AVAILABILITY -->
                                </div>
                                <button class="btn btn-room btn-product">Book Now</button>
                            </form>
                                <a class="btn btn-room btn-product" href="whatsapp://send?abid=phonenumber&text=Hello!"><i class="fa fa-whatsapp"></i> Inquire on Whatsapp</a>
                        </div>
                    </div>
                    <!-- END / FORM BOOK -->
                </div>
            </div>
        </div>
        <!-- END / DETAIL -->


        <!-- SIMILAR VENUES -->
        <div class="product-detail" style="border-bottom: 1px solid #e4e4e4;padding-bottom: 40px;">
            <h2 class="product-detail_title">Similar Venues</h2>
            <div class="product-detail_content">
                <div class="row">
                    @foreach($venues as $related_venue)
                        <!-- ITEM -->
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="product-detail_item">
                                <div class="img">
                                    <a href="{{ route('venue-detail', ['id' => $related_venue->id]) }}"><img src="{{ \Illuminate\Support\Facades\Storage::url($related_venue->thumbnail) }}" alt="#"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="{{ route('venue-detail', ['id' => $related_venue->id]) }}">{{ $related_venue->title }}</a></h2>
                                    <ul>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> Max: {{ $related_venue->max_persons }} Person(s)</li>
                                        <li><i class="fa fa-car" aria-hidden="true"></i> Parking: {{ $related_venue->parking }}</li>
                                    </ul>
                                    <a href="{{ route('venue-detail', ['id' => $related_venue->id]) }}" class="btn btn-room">VIEW DETAIL</a>
                                </div>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END / SIMILAR VENUES -->


        <!-- REVIEWS -->
        <div class="product-detail margin">
            <h2 class="product-detail_title">Reviews</h2>
            <div class="product-detail_content">
                @foreach($reviews as $review)
                    <div class="review">
                        <div class="info">
                            <span class="name">{{ $review->user->name }}</span>
                            <span class="date">{{ $review->created_at->toDateString() }}</span>
                        </div>
                        <p>{{ $review->body }}</p>
                    </div>
                @endforeach

                <div class="add-review">
                    <h4>Add a Review</h4>
                    @if(!\Illuminate\Support\Facades\Auth::user())
                        <p class="text-danger" style="margin-top: 10px;text-align: center;font-size: 16px;">You must be logged in to submit your review.</p>
                    @endif

                    <form action="{{ route('store-review') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $venue->id }}" name="venue_id">
                        <textarea name="review" id="new-review" placeholder="Write your review here..." required></textarea>
                        <button type="submit" class="btn btn-room btn-product">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END / REVIEWS -->
    </div>
</section>
<!-- END / SHOP DETAIL -->
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
