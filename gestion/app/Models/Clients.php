<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $model = Clients::class;
    public function location()
    {
        return $this->hasMany(Locations::class, 'locations_id');
    }

}
