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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('category', 60);
            $table->string('name', 100)->unique();
            $table->string('label', 100)->unique();
            $table->string('description');
            $table->decimal('price', 6, 2)->default(0);
            $table->string('product_mark');
            $table->string('image');
            $table->integer('status')->default(1); // 0 -> inativo, 1 -> ativo
            // $table->foreign('created_by')->nullable()->constrained('users');
            // $table->foreign('updated_by')->nullable()->constrained('users');
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
};
