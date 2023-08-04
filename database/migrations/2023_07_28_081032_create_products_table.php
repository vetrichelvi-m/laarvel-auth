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
            $table->string('name',150);
            $table->string('sku');
            $table->string('quantity');
            $table->string('description');
            $table->string('image')->defalut('image/download.jpeg');
            $table->unsignedDecimal('price', $precision = 8, $scale = 2);
            $table->unsignedBigInteger('product_category_id')->index('product_category_id');
            // $table->unsignedBigInteger('product_inventory_id')->index('product_inventory_id');
            // $table->unsignedBigInteger('product_category_id')->index('product_category_id');
            // $table->unsignedBigInteger('product_inventory_id')->index('product_inventory_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
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
