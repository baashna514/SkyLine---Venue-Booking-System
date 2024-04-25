<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
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
        .panel {
            border-radius: 10px;
            box-shadow: 0 0 10px #8E7037 !important;
            border: 1px solid #8E7037 !important;
        }
        .panel-heading {
            border-radius: 10px 10px 0 0;
            background-color: #8E7037 !important;
            color: #fff;
        }
        .panel-body {
            padding: 20px;
        }
        .order-table {
            margin-top: 20px;
        }
        table tr th{
            text-align: center !important;
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
            <h2>Profile</h2>
            <p>Manage Your Skyline Experience: Update Your Profile, View Your Bookings</p>
        </div>
    </div>
</section>
<!-- OUR-GALLERY-->
<div class="gallery-our wrap-gallery-restaurant gallery_1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Profile</h2>
                    </div>
                    <div class="panel-body">
                        @if (session('status') === 'profile-updated')
                            <div class="bg-success my-3">
                                <p class="text-white">Your account information has been successfully updated.</p>
                            </div>
                        @endif
                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 text-left">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="userNameInput">Name:</label>
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div class="form-group">
                                <label for="userEmailInput">Email:</label>
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full form-control" :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full form-control" :value="old('phone', $user->phone)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>
                            <div class="form-group">
                                <label for="city">City:</label>
                                <x-text-input id="city" name="city" type="text" class="mt-1 block w-full form-control" :value="old('city', $user->city)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <x-text-input id="address" name="address" type="text" class="mt-1 block w-full form-control" :value="old('address', $user->address)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                            </div>
                            <button class="btn btn-room btn-product">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Venue Bookings</h2>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped order-table">
                                <thead>
                                <tr>
                                    <th>SR#</th>
                                    <th>Booking ID</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Function Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Models\Booking::query()->where('customer_id', \Illuminate\Support\Facades\Auth::id())->get() as $key=> $booking)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>BK{{ $booking->id }}</td>
                                        <td>{{ $booking->venue->title }}</td>
                                        <td>{{ $booking->booking_date }}</td>
                                        <td>{{ $booking->function_date }}</td>
                                        <td>{{ $booking->status }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
