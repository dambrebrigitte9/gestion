<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatutLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statut_locations')->insert([
            ['nom' =>"en attente"],
            ['nom' =>"en cours"],
            ['nom' =>"terminé"],
            ['nom' =>"en attente"],
            ['nom' =>"en cours"],
            ['nom' =>"terminé"],
            

           
        ]);
        //
    }
}
