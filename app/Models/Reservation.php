<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'start_date', 'end_date', 'guests', 'trip_id'
    ];
    // Relación con el modelo Trip
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
