<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/styles.css">
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
    <!-- BODY-LOGIN -->
    <section class="body-page page-v1 page-v2">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3">REGISTER FORM</h2>
                <h5 class="p-v1">If you no have account in The Lotus Hotel! Register and feeling</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="required" placeholder="User Name *">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required="required" title="" placeholder="Email *">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control" type="password"
                               name="password"
                               required autocomplete="new-password" placeholder="Password *">
                        <span data-toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password *">
                        <span data-toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-default">REGISTER</button>
                </form>
            </div>
        </div>
    </section>
    <!-- END/BODY-LOGIN-->
    <!--FOOTER-->
    @include('partials.footer')
    <!-- END / FOOTER-->
    <!--SCOLL TOP-->
    <a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--END / SROLL TOP-->
    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vit-gallery.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/jquery.littlelightbox.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="js/sky.js"></script>
</body>
</html>
