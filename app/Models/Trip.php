<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'description',
        'start_date',
        'end_date',
        'guests',
        'price',
        'image_url'
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    // Relación con comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Accesor para convertir la fecha de salida a objeto Carbon
    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value);
    }

    // Accesor para convertir la fecha de llegada a objeto Carbon
    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value);
    }
}
