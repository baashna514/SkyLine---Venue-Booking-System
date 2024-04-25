<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline - Customer Detail</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
</head>
<body class="section-bg">
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
       START USER CANVAS MENU
================================= -->
<div class="user-canvas-container">
    <div class="side-menu-close">
        <i class="la la-times"></i>
    </div><!-- end menu-toggler -->
    @include('admin.partials.mobile-navbar')
</div><!-- end user-canvas-container -->
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START DASHBOARD NAV
================================= -->
<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            @include('admin.partials.sidebar-top')
        </div>
        <div class="sidebar-menu-wrap">
            @include('admin.partials.sidebar')
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->
<!-- ================================
       END DASHBOARD NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('admin.partials.navbar')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Customer Details</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('admin.dashboard') }}" class="text-white">Home</a></li>
                                <li>Customer Details</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box traveler-form border-0">
                            <div class="form-title-wrap">
                                <h3 class="title">Customer Details</h3>
                            </div>
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card-item profile-card">
                                            <div class="card-img">
                                                <img src="{{ asset('admin/images/team7.jpg') }}" alt="user-image">
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-items list-items-2 list-items-3">
                                                    <li><span>Name:</span>{{ $customer->name }}</li>
                                                    <li><span>Email:</span>{{ $customer->email }}</li>
                                                    <li><span>Phone:</span>{{ $customer->phone }}</li>
                                                    <li><span>City:</span>{{ $customer->city }}</li>
                                                    <li><span>Address:</span>{{ $customer->address }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-9">
                                        <div class="section-tab section-tab-3 traveler-tab">
                                            <ul class="nav nav-tabs ml-0" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="booking-tab" data-toggle="tab" href="#booking" role="tab" aria-controls="booking" aria-selected="false">
                                                        Bookings
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-4" id="myTabContent">
                                            <div class="tab-pane fade show active" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                                                <div class="profile-item">
                                                    <div class="table-form table-responsive">
                                                        <table class="table">
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
                                                                @foreach($customer->bookings as $key=> $booking)
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
                                                </div><!-- end profile-item -->
                                            </div><!-- end tab-pane -->
                                        </div>
                                    </div><!-- end col-lg-9 -->
                                </div><!-- end row -->
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="border-top mt-4"></div>
                <div class="row align-items-center">
                    @include('admin.partials.footer')
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Template JS Files -->
<script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery-ui.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/js/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('admin/js/animated-headline.js') }}"></script>
<script src="{{ asset('admin/js/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>
