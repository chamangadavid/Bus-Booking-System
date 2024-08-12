<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'seat_type',
        'frombooking',
        'destination',
        'bookDate',
        'bookTime',
        'adults',
        'children',
        'luggages',
        'luggages_details',
        'seat_number'
    ];

    public function bus()
    {
        
        return $this->hasOne('App\Models\RoomBus','id','bus_id');
        
    }
}
