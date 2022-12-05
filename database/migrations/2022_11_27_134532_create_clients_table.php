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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('full_name', 60);
            $table->string('cpf', 11)->unique();
            $table->string('phone', 11);
            $table->string('street', 60);
            $table->string('number', 10);
            $table->string('zip', 8);
            $table->string('complement', 60)->default('');
            $table->string('district', 60);
            $table->string('city', 60);
            $table->string('state', 2);
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
        Schema::dropIfExists('clients');
    }
};
