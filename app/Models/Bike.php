<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['serial_number', 'model', 'price_per_hour', 'status'])]
class Bike extends Model
{
        use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'price_per_hour' => 'decimal:2',
    ];
}
