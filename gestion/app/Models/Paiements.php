<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiements extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function location()
    {
        return $this->belongsTo(Locations::class, 'locations_id');
    }

    
}
