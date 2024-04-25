<div class="header-top-left">
    <span><i class="ion-android-cloud-outline"></i>35 °C</span>
    <span><i class="ion-ios-location-outline"></i> Riyadh</span>
    <span><i class="fa fa-phone" aria-hidden="true"></i> +966 555 556</span>
</div>
<div class="header-top-right">
    <ul>
        @if(!\Illuminate\Support\Facades\Auth::user())
            <li class="dropdown"><a href="{{ route('login') }}" title="LOGIN" class="dropdown-toggle">LOGIN</a></li>
            <li class="dropdown"><a href="{{ route('register') }}" title="REGISTER" class="dropdown-toggle">REGISTER</a></li>
        @else
            <li class="dropdown">
                <a href="{{ route('profile.edit') }}" title="REGISTER" class="dropdown-toggle"><i class="fa fa-user"></i> PROFILE</a>
            </li>
            <li class="dropdown">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="" title="LOGOUT" class="dropdown-toggle" onclick="event.preventDefault();this.closest('form').submit();"><i class="fa fa-sign-out"></i> LOGOUT</a>
                </form>
            </li>
        @endif
    </ul>
</div>
