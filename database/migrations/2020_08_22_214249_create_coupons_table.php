<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id_cp');
            $table->integer('code');
            $table->date('start_at');
            $table->date('expire_at');
            $table->string('type');
            $table->unsignedBigInteger('id_prod');
            $table->timestamps();
            $table->foreign('id_prod')->references('id_prod')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
