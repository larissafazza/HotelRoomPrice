<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'image_url',
        'website',
        'phone'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
