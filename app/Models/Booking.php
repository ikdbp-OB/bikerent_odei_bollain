<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bike_id',
        'start_time',
        'end_time',
        'status',
        'total_cost',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}