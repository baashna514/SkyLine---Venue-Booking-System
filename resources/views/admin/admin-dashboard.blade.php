<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skyline - Admin Dashboard</title>
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
        <div class="dashboard-bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Dashboard</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('admin.dashboard') }}" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="row mt-4">
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">Total Bookings</p>
                                    <h4 class="info__title">{{ $total_bookings }}</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-4">
                                    <i class="la la-shopping-cart"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="{{ route('admin.booking') }}" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">Pending Bookings</p>
                                    <h4 class="info__title">{{ $pending_bookings }}</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-1">
                                    <i class="la la-shopping-cart"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="{{ route('admin.booking') }}" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">Total Venues!</p>
                                    <h4 class="info__title">{{ $total_venues }}</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-3">
                                    <i class="la la-campground"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="{{ route('admin.venues') }}" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-l">
                        <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                            <div class="d-flex pb-3 justify-content-between">
                                <div class="info-content">
                                    <p class="info__desc">Total Customers!</p>
                                    <h4 class="info__title">{{ $total_customers }}</h4>
                                </div><!-- end info-content -->
                                <div class="info-icon icon-element bg-2">
                                    <i class="la la-users"></i>
                                </div><!-- end info-icon-->
                            </div>
                            <div class="section-block"></div>
                            <a href="{{ route('admin.customers') }}" class="d-flex align-items-center justify-content-between view-all">View All <i class="la la-angle-right"></i></a>
                        </div>
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 responsive-column--m">
                        <div class="form-box dashboard-card">
                            <div class="form-title-wrap">
                                <h3 class="title">Total Bookings</h3>
                            </div>
                            <div class="form-content">
                                <canvas id="bar-chart"></canvas>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-5 responsive-column--m">
                        <div class="form-box dashboard-card">
                            <div class="form-title-wrap">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Latest Comments</h3>
                                </div>
                            </div>
                            <div class="form-content p-0">
                                <div class="list-group drop-reveal-list">
                                    @foreach($comments as $comment)
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="msg-body d-flex align-items-center">
                                                <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                                <div class="msg-content w-100">
                                                    <h3 class="title pb-1">{{ $comment->venue->title }} ({{ $comment->user->name }})</h3>
                                                    <p class="msg-text">{{ $comment->body }}</p>
                                                </div>
                                            </div><!-- end msg-body -->
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-5 -->
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
<script src="{{ asset('admin/js/jquery.sparkline.js') }}"></script>
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/js/chart.js') }}"></script>
<script src="{{ asset('admin/js/chart.extension.js') }}"></script>
<script src="{{ asset('admin/js/line-chart.js') }}"></script>
<script src="{{ asset('admin/js/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>

<script>
    var ctx = document.getElementById('bar-chart');
    Chart.defaults.global.defaultFontFamily = 'Arial';
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontStyle = '500';
    Chart.defaults.global.defaultFontColor = '#808996';

    // Assuming you have fetched the data from the backend and stored it in the variables `$monthNames` and `$bookingsData`

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: <?php echo json_encode($monthNames); ?>, // Dynamic month names from Laravel
            datasets: [{
                label: "Bookings Count",
                data: <?php echo json_encode(array_values($bookingsData)); ?>, // Dynamic bookings count from Laravel
                backgroundColor: '#287dfa',
                hoverBackgroundColor: '#2273e5',
                pointBackgroundColor: '#fff',
                borderWidth: 0,
                pointRadius: 4
            }]
        },

        // Configuration options go here
        options: {
            tooltips: {
                backgroundColor: '#1c2540'
            },
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    barPercentage: 0.4,
                    barThickness: 15,
                    display: true,
                    gridLines: {
                        offsetGridLines: false,
                        display: false
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee',
                    },
                    ticks: {
                        fontSize: 14,
                    }
                }]
            }
        }
    });
</script>
</body>
</html>
