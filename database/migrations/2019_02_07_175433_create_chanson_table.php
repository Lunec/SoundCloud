<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChansonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',255);
            $table->string("fichier", 255);
            $table->string('image', 255);
            $table->string("style", 255);
            $table->integer("utilisateur_id");
            $table->integer('likesCount')->default(0);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chanson');
    }
}
