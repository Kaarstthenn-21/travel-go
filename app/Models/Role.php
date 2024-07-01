<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function isAdmin(): bool
    {
        return $this->roles()->where('name', 'admin123')->exists();
    }

    // ...
}
