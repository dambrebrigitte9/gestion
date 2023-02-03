<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function client()
    {
        return $this->belongsTo(Clients::class, 'clients_id');
    }
    public function statutLocation()
    {
        return $this->belongsTo(StatutLocations::class, 'statut_locations_id');
    }

    public function paiement()
    {
        return $this->hasMany(Paiements::class, 'paiements_id');
    }

    public function articles()
    {
        return $this->belongsToMany(Articles::class, 'articles_locations',  'locations_id' , 'articles_id');
    }
}
