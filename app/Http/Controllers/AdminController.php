<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\City;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    function __construct(){
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || !Auth::user()->isAdmin()) {
                return redirect()->route('index');
            }

            return $next($request);
        });
    }

    public function index(){
        $output['total_bookings'] = Booking::count();
        $output['pending_bookings'] = Booking::where('status', 'pending')->count();
        $output['total_venues'] = Venue::count();
        $output['total_customers'] = User::where('is_admin', false)->count();
        $output['comments'] = Comment::with(['user', 'venue'])->inRandomOrder()->limit(10)->get();

        $year = now()->year;
        $monthsOfYear = range(1, 12);
        $bookingsCountByMonth = Booking::select(DB::raw('MONTH(booking_date) as month'), DB::raw('COUNT(*) as total'))
            ->whereYear('booking_date', $year)
            ->groupBy(DB::raw('MONTH(booking_date)'))
            ->orderBy(DB::raw('MONTH(booking_date)'))
            ->pluck('total', 'month')
            ->toArray();
        $bookingsData = [];
        foreach ($monthsOfYear as $month) {
            $bookingsData[$month] = isset($bookingsCountByMonth[$month]) ? $bookingsCountByMonth[$month] : 0;
        }
        $monthNames = [];
        foreach ($monthsOfYear as $month) {
            $monthNames[] = date('F', mktime(0, 0, 0, $month, 1));
        }
        $output['monthNames'] = $monthNames;
        $output['bookingsData'] = $bookingsData;
        return view('admin/admin-dashboard', $output);
    }

    public function booking_list(){
        return view('admin/admin-booking');
    }

    public function customer_list(){
        $customers = User::where('is_admin', false)->paginate(10);
        return view('admin/admin-customer')->with('customers', $customers);
    }

    public function customer_detail($id){
        $customer = User::with('bookings')->find($id);
        return view('admin/admin-customer-detail')->with('customer', $customer);
    }

    public function comments(){
        $comments = Comment::orderBy('id', 'DESC')->paginate(10);
        return view('admin/admin-comment')->with('comments', $comments);
    }

    public function delete_comment($id){
        Comment::query()->find($id)->delete();
        return redirect()->back()->with('success', 'Review Deleted Successfully');
    }

}
