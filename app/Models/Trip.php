<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    //Referencia con los comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
