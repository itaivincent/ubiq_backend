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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_image')->nullable();
            $table->double('price')->nullable();
            $table->double('order_transaction_amount')->nullable();
            $table->double('order_transaction_currency')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('order_status')->nullable();
            $table->string('estimated_arrival_time')->nullable();
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
