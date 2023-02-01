<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DureeLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('duree_locations')->insert([
            ['libelle' =>"Bouteille champagne ", 'valeurEnHeure' =>"2"],
            ['libelle' =>"champagne ", 'valeurEnHeure' =>"5"],

           
        ]);
        //
    }
}
