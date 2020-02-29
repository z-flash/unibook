<?php

namespace App;

use App\Booking;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'title',
        'option',
        'quantity', 
        'price',
        'mobile', 
        'description'
    ];

    public function bookings()
    {
        return $this->hasMany('App\Booking', 'foreign_key');
    }
}
