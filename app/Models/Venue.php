<?php

namespace App\Models;

use App\Http\Controllers\CityController;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Venue extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function gelleries(){
        return $this->hasMany(Gallery::class);
    }

    public static function storeVenue($input){
        $data = array();
        $data['city_id'] = isset($input['city'])?$input['city']:null;
        $data['type'] = isset($input['type'])?$input['type']:null;
        $data['title'] = isset($input['title'])?$input['title']:null;
        $data['address'] = isset($input['address'])?$input['address']:null;
        $data['size'] = isset($input['size'])?$input['size']:null;
        $data['min_persons'] = isset($input['min_persons'])?$input['min_persons']:null;
        $data['max_persons'] = isset($input['max_persons'])?$input['max_persons']:null;
        $data['parking'] = isset($input['parking'])?$input['parking']:null;
        $data['baths'] = isset($input['baths'])?$input['baths']:null;
        $data['starting_price'] = isset($input['starting_price'])?$input['starting_price']:null;

        if(isset($input['thumbnail'])){
            $image = $input['thumbnail'];
            $name=time() . '_' . $image->getClientOriginalName();
            $name = self::getNameWithoutSpaces($name);
            $imagePath = $image->storeAs('public/venues/thumbnail', $name);
            $data['thumbnail'] = isset($imagePath)?$imagePath:null;
        }
        $venue_id = DB::table('venues')->insertGetId($data);
        if($venue_id){
            if (isset($input['gallery'])) {
                foreach ($input['gallery'] as $gall_image) {
                    $imageName = time() . '_' . $gall_image->getClientOriginalName();
                    $imageName = self::getNameWithoutSpaces($imageName);
                    // Store the image in the storage directory
                    $imagePath = $gall_image->storeAs('public/venues/gallery', $imageName);
                    // Save the image path to the database and associate with the venue
                    $gallery = new Gallery();
                    $gallery->venue_id = $venue_id;
                    $gallery->image_url = $imagePath;
                    $gallery->save();
                }
            }
            return $venue_id;
        }
    }

    public static function updateVenue($input, $venue_id){
        $data = array();
        $data['city_id'] = isset($input['city'])?$input['city']:null;
        $data['type'] = isset($input['type'])?$input['type']:null;
        $data['title'] = isset($input['title'])?$input['title']:null;
        $data['address'] = isset($input['address'])?$input['address']:null;
        $data['size'] = isset($input['size'])?$input['size']:null;
        $data['min_persons'] = isset($input['min_persons'])?$input['min_persons']:null;
        $data['max_persons'] = isset($input['max_persons'])?$input['max_persons']:null;
        $data['parking'] = isset($input['parking'])?$input['parking']:null;
        $data['baths'] = isset($input['baths'])?$input['baths']:null;
        $data['starting_price'] = isset($input['starting_price'])?$input['starting_price']:null;

        if(isset($input['thumbnail'])){
            $image = $input['thumbnail'];
            $name=time() . '_' . $image->getClientOriginalName();
            $name = self::getNameWithoutSpaces($name);
            $imagePath = $image->storeAs('public/venues/thumbnail', $name);
            $data['thumbnail'] = isset($imagePath)?$imagePath:null;
        }
        $_id = Venue::where('id', $venue_id)->update($data);
        if($_id){
            if (isset($input['gallery'])) {
                foreach ($input['gallery'] as $gall_image) {
                    $imageName = time() . '_' . $gall_image->getClientOriginalName();
                    $imageName = self::getNameWithoutSpaces($imageName);
                    // Store the image in the storage directory
                    $imagePath = $gall_image->storeAs('public/venues/gallery', $imageName);
                    // Save the image path to the database and associate with the venue
                    $gallery = new Gallery();
                    $gallery->venue_id = $_id;
                    $gallery->image_url = $imagePath;
                    $gallery->save();
                }
            }
            return $_id;
        }
    }

    public static function getNameWithoutSpaces($name) {
        return preg_replace('/\s+/', '', $name);
    }

    public static function getVenues($type = null, $param = null, $excludeVenueId = null, $search = false, $city_title = null, $venue_type = null){
        $query = Venue::inRandomOrder()
            ->join('cities', 'venues.city_id', '=', 'cities.id')
            ->select('venues.*', 'cities.title as city');

        if ($excludeVenueId !== null) {
            $query->where('venues.id', '!=', $excludeVenueId);
        }


        $query->when($type && !$search, function ($query) use ($type, $param) {
            if($type == 'type'){
                $query->where('venues.type', '=', $param);
            }
            if($type == 'city'){
                $city = City::where('title', 'like', '%' . $param . '%')->first();
                $query->where('venues.city_id', '=', $city->id);
            }
        });

        return $query->when($search, function ($query) use ($city_title, $venue_type) {
            if($venue_type){
                $query->where('venues.type', '=', $venue_type);
            }
            if($city_title){
                $city = City::where('title', 'like', '%' . $city_title . '%')->first();
                $query->where('venues.city_id', '=', $city->id);
            }
        })
        ->paginate(10);
    }

    public static function bookVenue($input){
        $booking_data = array();
        $booking_data['customer_id'] = Auth::id();
        $booking_data['venue_id'] = $input['venue_id'];
        $booking_data['booking_date'] = Carbon::now();
        $booking_data['function_date'] = $input['event_date'];
        $booking_data['persons'] = $input['persons'];
        $booking_data['details'] = $input['details'];
        $booking_data['status'] = 'pending';
        $booking_id = DB::table('bookings')->insertGetId($booking_data);
        if($booking_id){
            return $booking_id;
        }else{
            return false;
        }
    }
}
