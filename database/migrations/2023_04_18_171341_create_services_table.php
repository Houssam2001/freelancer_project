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
        Schema::create('services', function (Blueprint $table) {
            $table->id('service_id');
            $table->foreignId('user_id')
            ->constrained() 
            ->references('user_id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreignId('category_id')
            ->constrained() 
            ->references('categorie_id')
            ->on('categories')
            ->onDelete('cascade');
            $table->string('service_name');
            $table->string('description');
            $table->boolean('availability');
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
        Schema::dropIfExists('services');
    }
};
