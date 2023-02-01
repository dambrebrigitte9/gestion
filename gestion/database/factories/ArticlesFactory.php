<?php

namespace Database\Factories;

use app\Models\Articles;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Articles::class;
    public function definition()
    {
        return [
            
            "nom"=>$this->faker->lastName,
            "numeroSerie"=>$this->faker->swiftBicNumber(),
            "imageUrl"=>$this->faker->imageUrl(),
            "type_articles_id"=>rand( 1, 4),
            "estDisponible"=>rand(0, 1),

        ];
    }
}
