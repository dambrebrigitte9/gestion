<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Articles extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(TypeArticles::class, 'type_articles_id');
    }
    public function tarification()
    {
        return $this->hasMany(Tarification::class, 'tarification_id');
    }

    public function locations()
    {
        return $this->belongsToMany(Locations::class, 'articles_locations', 'articles_id' , 'locations_id');
    }

    public function propriete()
    {
        return $this->belongsToMany(ProprieteArticles::class, 'articles_propriete_id', 'articles_id' , 'propriete_id');
    }

    public function article_proprietes(){
        return $this->hasMany(ArticlesProprietes::class, 'articles_proprietes_id');
    }
    
    


}
