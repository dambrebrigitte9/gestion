<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\Clients;
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
        $this->call(TypeArticlesTableSeeder::class);
        Articles::factory(10)->create();   
        Clients::factory(10)->create();

    }

}
