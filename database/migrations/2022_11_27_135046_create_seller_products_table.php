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
        Schema::create('seller_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_products_id');
            $table->foreign('seller_products_id')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('seller_products');
    }
};
