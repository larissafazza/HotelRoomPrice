<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'start_date',
        'end_date',
        'price',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
