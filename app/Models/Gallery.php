<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public static function getGalleryImages($type = null){
        return Gallery::inRandomOrder()
            ->join('venues', 'galleries.venue_id', '=', 'venues.id')
            ->when($type, function ($query) use ($type) {
                $query->where('venues.type', '=', $type);
            })
            ->select('galleries.*', 'venues.title')
            ->get();
    }
}
