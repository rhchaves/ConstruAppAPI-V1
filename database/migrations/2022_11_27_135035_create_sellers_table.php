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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('fantasyName', 60);
            $table->string('cnpj', 14)->unique();
            $table->string('phone', 11)->unique();
            $table->string('street', 60);
            $table->string('number', 10);
            $table->string('zip', 8)->unique();
            $table->string('complement', 60)->nullable();
            $table->string('district', 60);
            $table->string('city', 60);
            $table->string('state', 2);
            // $table->integer('status')->default(0); // 0 -> inativo, 1 -> ativo
            $table->string('status')->default('inativo'); // 0 -> inativo, 1 -> ativo
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
        Schema::dropIfExists('sellers');
    }
};
