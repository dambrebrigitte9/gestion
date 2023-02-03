<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsToMany(User::class, 'users_permissions',  'users_id' , 'permissions_id');
    }
}
