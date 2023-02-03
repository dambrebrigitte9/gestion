<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifications extends Model
{
    use HasFactory;
    public function article()
    {
        return $this->belongsTo(Articles::class, 'type_articles_id');
    }
    public function dureeLocations()
    {
        return $this->belongsTo(DureeLocations::class, 'type_articles_id');
    }
}
