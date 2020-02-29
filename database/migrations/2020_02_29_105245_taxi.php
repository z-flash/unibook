<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Taxi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model_of_car');
            $table->integer('sit_places');
            $table->string('description');
            $table->float('price')->nullable();
            $table->integer('product_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
