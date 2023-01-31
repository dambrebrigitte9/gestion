<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articles_id');
            $table->foreignId('locations_id');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table('articles_locations', function (Blueprint $table) {
        $table->dropForeign(["articles_id", "locations_id"]);
    });
        Schema::dropIfExists('articles_locations');
    }
    
}
