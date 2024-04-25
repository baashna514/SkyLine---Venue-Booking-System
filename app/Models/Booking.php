<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(User::class);
    }

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    public static function change_status($id, $status){
        return Booking::where('id', $id)->update([
            'status' => $status
        ]);
    }
}
