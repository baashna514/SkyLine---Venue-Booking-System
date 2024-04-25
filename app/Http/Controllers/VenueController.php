<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Gallery;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VenueController extends Controller
{

    function __construct(){
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || !Auth::user()->isAdmin()) {
                return redirect()->route('index');
            }

            return $next($request);
        });
    }

    public function venues(){
        $venues = Venue::with(['city', 'gelleries'])->paginate(10);
        $output['venues'] = $venues;
        return view('admin/admin-venue', $output);
    }

    public function venue_new(){
        $output['cities'] = City::all();
        $output['edit'] = false;
        return view('admin/admin-venue-new', $output);
    }

    public function venue_store(Request $request){
        $this->validate($request, [
            'thumbnail' => 'required',
            'title' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        $input = $request->all();
        $result = Venue::storeVenue($input);
        if($result){
            return redirect()->route('admin.venues')->with('success', 'New venue saved successfully.');
        }
    }

    public  function venue_delete($id){
        $venue = Venue::query()->find($id);
        if(!$venue){
            return back()->with('error', 'Venue not found.');
        }
        if($venue->thumbnail){
            Storage::delete($venue->thumbnail);
        }
        if($venue->gelleries->count() && $venue->gelleries->count()> 0){
            foreach ($venue->gelleries as $gallery){
                Storage::delete($gallery->image_url);
            }
            Gallery::where('venue_id', $id)->delete();
        }
        $venue->delete();
        return back()->with('success', 'Venue deleted successfully.');
    }

    public function venue_edit($id){
        $venue = Venue::with(['city', 'gelleries'])->find($id);
        if(!$venue){
            return back()->with('error', 'Venue not found.');
        }
        $output['cities'] = City::all();
        $output['venue'] = $venue;
        $output['edit'] = true;
        return view('admin/admin-venue-new', $output);
    }

    public function venue_update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        $venue = Venue::query()->find($id);
        $input = $request->all();
        if(!$venue->thumbnail && !$request->thumbnail){
            return back()->with('error', 'Thumbnail is required.');
        }
        $result = Venue::updateVenue($input, $id);
        if($result){
            return redirect()->route('admin.venues')->with('success', 'Venue updated successfully.');
        }
    }

    public function venue_gallery_delete($id){
        $gallery = Gallery::query()->find($id);
        if($gallery && $gallery->image_url){
            Storage::delete($gallery->image_url);
        }
        if($gallery->delete()){
            return back()->with('success', 'Gallery image deleted successfully.');
        }else{
            return back()->with('success', 'Gallery image not deleted.');
        }
    }

    public function venue_thumbnail_delete($id){
        $venue = Venue::query()->find($id);
        if($venue && $venue->thumbnail){
            Storage::delete($venue->thumbnail);
        }
        $venue->update([
            'thumbnail' => null,
        ]);
        return back()->with('success', 'Thumbnail deleted successfully.');
    }
}
