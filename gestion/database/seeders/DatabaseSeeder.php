<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\Clients;
use App\Models\User;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(StatutLocationsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DureeLocationsTableSeeder::class);
        $this->call(TypeArticlesTableSeeder::class);
        Articles::factory(10)->create();   
        Clients::factory(10)->create();
        User::factory(50)->create();


    }

}
