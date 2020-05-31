<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('order_number');
            $table->integer('customer_id');
            $table->double('total')->comment('base price on EUR');
            $table->integer('order_status')->comment('
                0 = Order Placed in Cart, 
                1 = Order has been checked out, 
                2 = Processing, 
                3 = On Its way, 
                4 = Pizza Delivered
            ');
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
        Schema::dropIfExists('orders');
    }
}
