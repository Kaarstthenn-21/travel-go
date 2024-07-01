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
    //Referencia con los comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

        public function getFechaSalidaAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getFechaLlegadaAttribute($value)
    {
        return Carbon::parse($value);
    }
}
