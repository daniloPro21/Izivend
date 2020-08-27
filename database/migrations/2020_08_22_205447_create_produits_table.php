<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id_prod');
            $table->string('nom_prod');
            $table->date('date_prod');
            $table->date('date_exp');
            $table->string('description');
            $table->unsignedBigInteger('id_cat');
            $table->unsignedBigInteger('id_four');
            $table->timestamps();

            $table->foreign('id_cat')->references('id_cat')->on('categorie');
            $table->foreign('id_four')->references('id_four')->on('fournisseur');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
