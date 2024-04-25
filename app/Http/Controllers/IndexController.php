<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        $output['venues'] = Venue::inRandomOrder()->limit(9)->get();
        $output['gallery'] = Gallery::inRandomOrder()->limit(8)->get();
        return view('index', $output);
    }

    public function gallery(){
        $output['images'] = Gallery::getGalleryImages(null);
        $output['farmhouses'] = Gallery::getGalleryImages('farmhouse');
        $output['banquet'] = Gallery::getGalleryImages('banquet');
        return view('gallery', $output);
    }

    public function venue_search($type = null, $param = null){
//        dd($type, $param);
        $output['venues'] = Venue::getVenues($type, $param);
        $output['cities'] = City::withCount('venues')->get();
        $output['selected_type'] = null;
        $output['selected_city'] = null;
        return view('venues-search', $output);
    }

    public function venues(Request $request){
        $input = $request->all();
        $city = null;
        $venue_type = null;
        if(isset($input['city'])){
            $city = $input['city'];
        }
        if(isset($input['type'])){
            $venue_type = $input['type'];
        }
        $output['venues'] = Venue::getVenues(null, null, null, true, $city, $venue_type);
        $output['cities'] = City::withCount('venues')->get();
        $output['selected_type'] = $input['type'];
        $output['selected_city'] = $input['city'];
        return view('venues-search', $output);
    }

    public function venue_detail($id){
        $output['venue'] = Venue::with(['city', 'gelleries'])->find($id);
        $output['venues'] = Venue::inRandomOrder()
            ->join('cities', 'venues.city_id', '=', 'cities.id')
            ->select('venues.*', 'cities.title as city')
            ->where('venues.id', '!=', $id)
            ->where('venues.type', '=', $output['venue']->type)
            ->limit(4)->get();
        $output['reviews'] = Comment::with('user')->where('venue_id', $id)->orderBy('id', 'desc')->get();
        return view('venue-detail', $output);
    }

    public function store_review(Request $request){
        if(!Auth::user()){
            return back()->with('error', 'You must be logged in to submit your review.');
        }
        $this->validate($request, [
            'review' => 'required',
        ]);
        $input = $request->all();
        Comment::create([
            'user_id' => Auth::id(),
            'venue_id' => $input['venue_id'],
            'body' => $input['review'],
        ]);
        return back()->with('success', 'Your review has been submitted.');
    }

    public function venue_booking(Request $request){
        if(!Auth::user()){
            return back()->with('error', 'You must be logged in to book venue.');
        }
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'event_date' => 'required',
            'persons' => 'required',
            'details' => 'required',
        ]);
        $input = $request->all();
        $result = Venue::bookVenue($input);
        if($result){
            return back()->with('success', 'Thank you for booking an venue. One of our team member will contact you soon.');
        }else{
            return back()->with('error', 'There was an error in booking venue. Please try again.');
        }
    }

}
