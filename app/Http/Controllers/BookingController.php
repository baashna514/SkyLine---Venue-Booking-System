<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    function __construct(){
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || !Auth::user()->isAdmin()) {
                return redirect()->route('index');
            }

            return $next($request);
        });
    }

    public function booking_list(){
        $bookings = Booking::with(['customer', 'venue'])->paginate(5);
        $output['bookings'] = $bookings;
        return view('admin/admin-booking', $output);
    }

    public function change_status($id, $status){
        if(!$id){
            return back()->with('error', 'Booking with this ID not found in the database.');
        }
        $result = Booking::change_status($id, $status);
        if($result){
            if($status == 'approved'){
                $msg = 'You have Approved the Booking.';
            }else{
                $msg = 'You have Cancelled the Booking.';
            }
            return back()->with('success', $msg);
        }else{
            return back()->with('error', 'Booking status not updated.');
        }
    }
}
