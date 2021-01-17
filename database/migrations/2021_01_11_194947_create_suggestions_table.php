<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('seller_name')->nullable();
            $table->double('zwl_price')->nullable();
            $table->double('usd_price')->nullable();
            $table->string('promotional_information')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('store_id')->nullable();
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
        Schema::dropIfExists('suggestions');
    }
}
