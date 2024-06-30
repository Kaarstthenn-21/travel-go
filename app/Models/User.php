<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Cashier\Billable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    
    use Billable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture' // Agrege la propiedad de foto
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //relacion del usuario con los comentarios
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // Método para verificar si el usuario es el autor de un comentario
    public function canDeleteComment(Comment $comment)
    {
        return $this->id === $comment->user_id;
    }
    public function isAdmin()
    {
        return $this->role === 'admin';
        // Aquí 'role' es un campo de tu tabla 'users' que indica el rol del usuario.
        // Puedes ajustar esta condición según cómo tengas definidos los roles en tu aplicación.
    }
}

