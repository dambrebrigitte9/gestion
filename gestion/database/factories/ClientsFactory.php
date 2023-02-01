<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $ville = $this->faker->city;
        $pays = $this->faker->country;
        return [
            "nom"=>$this->faker->lastName,
            "prenom"=>$this->faker->firstName(),
            "sexe"=>array_rand(["F","M"], 1),
            "dateNaissance"=>$this->faker->dateTimeBetween("1990-03-23","2023-03-23"),
            "lieuNaissance"=> "$pays , $ville",
            "nationalite"=>$this->faker->country(),
            "pays"=>$pays,
            "ville"=>$ville,
            "adresse"=>$this->faker->address(),
            "telephone1"=>$this->faker->phoneNumber(),
            "telephone2"=>$this->faker->phoneNumber(),
            "pieceIdentite"=>array_rand(["CNI","PASSWORD","PERMIS DE CONDUIRE"],1),
            "numPieceIdentite"=>$this->faker->creditCardNumber,

           
        ];
    }
}
