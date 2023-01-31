<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtclesProrietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artcles_prorietes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articles_id');
            $table->foreignId('propriete_articles_id');
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
    {   Schema::table('artcles_prorietes', function (Blueprint $table) {
        $table->dropForeign(["'articles_id", "propriete_articles_id"]);
    });
        Schema::dropIfExists('artcles_prorietes');
    }
}
