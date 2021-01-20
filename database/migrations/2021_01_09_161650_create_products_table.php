<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->integer('store_id')->nullable();
            $table->string('added_by')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('sub_category_id')->nullable();
            $table->string('description')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity_instock')->nullable();
            $table->string('promotional_information')->nullable();
            $table->double('zwl_price')->nullable();
            $table->double('usd_price')->nullable();
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
        Schema::dropIfExists('products');
    }
}
