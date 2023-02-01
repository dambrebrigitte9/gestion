<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->foreignId('statut_locations_id')->constrained();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('clients_id')->constrained();


        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign(["statut_locations_id", "users_id" , "clients_id"]);
        });
        Schema::dropIfExists('locations');
    }
}
