<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_order_detail_toppings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('order_detail_id');
            $table->integer('topping_id');
            $table->double('subtotal')->comment('base price on EUR');;
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
        Schema::dropIfExists('order_detail_toppings');
    }
}
