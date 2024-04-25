<ul class="nav navbar-nav navbar-right">
    <li><a href="{{ route('index') }}" title="Home">Home</a></li>
    <li class="dropdown">
        <a href="" title="Venue Types" class="dropdown-toggle" data-toggle="dropdown">Venue Types<b class="caret"></b></a>
        <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
            <li><a href="{{ route('venues', ['type' => 'type', 'param' => 'farmhouse']) }}" title="Farm Houses">Farm Houses</a></li>
            <li><a href="{{ route('venues', ['type' => 'type', 'param' => 'banquet']) }}" title="Banquet Halls">Banquet Halls</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="" title="Locations" class="dropdown-toggle" data-toggle="dropdown">Locations<b class="caret"></b></a>
        <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
            @foreach(\App\Models\City::all() as $city)
                <li><a href="{{ route('venues', ['type' => 'city', 'param' => $city->title]) }}" title="{{ $city->title }}">{{ $city->title }}</a></li>
            @endforeach
        </ul>
    </li>
    <li><a href="{{ route('gallery') }}" title="Gallery">Gallery</a></li>
    <li><a href="{{ route('about-us') }}" title="About Us">About</a></li>
    <li><a href="{{ route('contact-us') }}" title="Contact Us">Contact</a></li>
</ul>
