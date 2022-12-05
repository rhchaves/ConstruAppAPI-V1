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
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('product_id');
            // $table->foreignId('product_id')->references('id')->on('products');
            // $table->integer('quantity_product');  // unsigned: somente inteiros positivos
            $table->string('payment');
            // $table->integer('status')->default(1); // 0 -> inativo, 1 -> ativo
            $table->string('status')->default('ativo'); // 0 -> inativo, 1 -> ativo
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
        Schema::dropIfExists('shopping_carts');
    }
};
