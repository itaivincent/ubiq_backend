<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name')->nullable();
            $table->string('store_owner')->nullable();
            $table->string('promo_description')->nullable();
            $table->string('store_phone_number')->nullable();
            $table->string('store_email')->nullable();
            $table->string('store_address')->nullable(); 
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();           
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
