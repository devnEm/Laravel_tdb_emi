<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvenantsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avenants', function (Blueprint $table) {
            $table->increments('avenant_id');
            $table->integer('objectif');
            $table->integer('realise');
            $table->integer('points');
            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')->references('produit_id')->on('produits')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
         Schema::drop('avenants');
    }
}
