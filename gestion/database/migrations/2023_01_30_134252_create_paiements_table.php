<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->string('montantPaye');
            $table->dateTime('datePaiement');
            $table->foreignId('users_id');
            $table->foreignId('locations_id');

        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table('paiements', function (Blueprint $table) {
        $table->dropForeign(["users_id", "locations_id"]);
    });
        Schema::dropIfExists('paiements');
    }
}
