<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_vuelo',
        'id_hotel',
        'incluye_hotel',
        'precio',
        'duracion',
        'rating',
        'imagen',
    ];

    public function vuelo()
    {
        return $this->belongsTo(Trip::class, 'id_vuelo');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }

    public function getDuracionAttribute()
    {
        return $this->vuelo ? $this->vuelo->end_date->diffInDays($this->vuelo->start_date) : null;
    }
}
