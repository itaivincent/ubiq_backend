<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();          
            $table->integer('store_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->double('total_price')->nullable();
            $table->double('order_transaction_amount')->nullable();
            $table->double('order_transaction_currency')->nullable();
            $table->integer('total_quantity')->nullable();
            $table->integer('order_status')->nullable();
            $table->double('subtotal')->nullable();
            $table->string('payment_method')->nullable(); 
            $table->string('product_names')->nullable();   
            $table->date('date')->nullable();  
            $table->double('transaction_total')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
