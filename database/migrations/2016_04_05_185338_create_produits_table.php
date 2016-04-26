<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mois_id')->unsigned();
            $table->foreign('mois_id')->references('id')->on('mois');
            $table->integer('support_id')->unsigned();
            $table->foreign('support_id')->references('id')->on('supports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produits');
    }
}
