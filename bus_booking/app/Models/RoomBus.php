<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBus extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_title',
        'start_From',
        'bus_time',
        'bus_date',
        'destination',
        'description',
        'bus_capacity',
        'price',
        'image'
    ];
}
