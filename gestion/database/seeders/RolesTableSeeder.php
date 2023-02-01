<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['nom' =>"chef de departement"],
            ['nom' =>"docteur"],
            ['nom' =>"developper"],
            ['nom' =>"apprentis"],

           
        ]);
        //
    }
}
