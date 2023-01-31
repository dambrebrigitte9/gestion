<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double('prix');
            $table->foreignId('articles_id');
            $table->foreignId('duree_locations_id');
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
    {   
        Schema::table('tarification', function (Blueprint $table) {
            $table->dropForeign(["duree_locations_id", "articlecs_id"]);
        });
        Schema::dropIfExists('tarifications');
    }
}
