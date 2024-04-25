<ul class="sidebar-menu toggle-menu list-items">
    <li class="{{ (request()->is('admin/dashboard*')) ? 'page-active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="la la-dashboard mr-2"></i>Dashboard</a></li>
    <li class="{{ (request()->is('admin/cities*')) ? 'page-active' : '' }}"><a href="{{ route('admin.cities') }}"><i class="la la-city mr-2"></i>Cities</a></li>
    <li class="{{ (request()->is('admin/venues*')) ? 'page-active' : '' }}"><a href="{{ route('admin.venues') }}"><i class="la la-campground mr-2"></i>Venues</a></li>
    <li class="{{ (request()->is('admin/booking*')) ? 'page-active' : '' }}"><a href="{{ route('admin.booking') }}"><i class="la la-shopping-cart mr-2"></i>Bookings</a></li>
    <li class="{{ (request()->is('admin/customers*')) ? 'page-active' : '' }}"><a href="{{ route('admin.customers') }}"><i class="la la-users mr-2"></i>Customers</a></li>
    <li class="{{ (request()->is('admin/comments*')) ? 'page-active' : '' }}"><a href="{{ route('admin.comments') }}"><i class="la la-star mr-2"></i>Comments</a></li>
</ul>
