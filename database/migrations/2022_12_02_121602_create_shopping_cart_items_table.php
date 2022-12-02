<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shopping_cart_id');
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onUpdate('cascade')->onDelete('cascade');
            // $table->unsignedBigInteger('product_id');
            $table->foreignId('product_id')->references('id')->on('products');
            // $table->decimal('product_value');
            $table->integer('quantity');
            $table->decimal('subtotal_value');
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
        Schema::dropIfExists('shopping_cart_items');
    }
};
