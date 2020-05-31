<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_pizza_toppings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('category');
            $table->string('image');
            $table->double('price')->comment('base price on EUR');
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
        Schema::dropIfExists('r_pizza_toppings');
    }
}
