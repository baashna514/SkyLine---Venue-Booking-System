<footer class="footer-sky">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <div class="icon-email">
                        <a href="#" title="Email"><img src="{{ asset('images/Home/footer-top-icon-l.png') }}" alt="Email" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5">
                    <div class="textbox">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your email address" aria-label="Search for...">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="ion-android-send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 text-right">
                    <div class="footer-icon-l">
                        <a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" title="Isnstagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /footer-top -->
    <div class="footer-mid">
        <div class="container">
            <div class="row padding-footer-mid">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="footer-logo text-center list-content">
                        <a href="{{ route('index') }}" title="Skyline"><img src="{{ asset('images/Home/sky-logo-footer.png') }}" alt="Image"></a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1  ">
                    <div class="list-content">
                        <ul>
                            <li><a href="{{ route('index') }}" title="">Home</a></li>
                            <li><a href="{{ route('index') }}" title="">Banquet Halls</a></li>
                            <li><a href="{{ route('index') }}" title="">Farm Houses</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1 ">
                    <div class="list-content ">
                        <ul>
                            <li><a href="" title="">About Us</a></li>
                            <li><a href="" title="">Contact Us</a></li>
                            <li><a href="" title="">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1">
                    <div class="list-content ">
                        <ul>
                            @foreach(\App\Models\City::inRandomOrder()->limit(3)->get() as $city)
                            <li><a href ="{{ $city->id }}" title="{{ $city->title }}">{{ $city->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                    Copyright © 2024 by <a href="" title="">SkyLine.</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
                    <div class="payments text-right">
                        <ul>
                            <li>
                                <a href="#" title="Paypal"><img src="{{ asset('images/Home/Paypal.png') }}" alt="Paypal"></a>
                            </li>
                            <li>
                                <a href="#" title="Visa"><img src="{{ asset('images/Home/Visa.png') }}" alt="Visa"></a>
                            </li>
                            <li>
                                <a href="#" title="Master"><img src="{{ asset('images/Home/Master-card.png') }}" alt="Master"></a>
                            </li>
                            <li>
                                <a href="#" title="Discover"><img src="{{ asset('images/Home/Discover.png') }}" alt="Discover"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
