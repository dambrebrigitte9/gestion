<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteArticles extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(TypeArticles::class, 'type_articles_id');
    }
}
