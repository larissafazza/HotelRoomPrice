<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', //single, double or suite
        'number_of_rooms', //amount of this type of rooms in the hotel
        'hotel_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
