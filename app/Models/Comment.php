<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['trip_id', 'user_id', 'content', 'likes', 'dislikes', 'parent_id'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    // Relación: Un comentario pertenece a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // Relación: Un comentario puede tener muchas respuestas
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}