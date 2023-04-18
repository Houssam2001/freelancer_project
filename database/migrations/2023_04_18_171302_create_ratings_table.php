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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->double('rating');
            $table->foreignId('id')
            ->constrained() 
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreignId('project_id')
            ->constrained() 
            ->references('project_id')
            ->on('projects')
            ->onDelete('cascade');
            $table->string('feedback');
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
        Schema::dropIfExists('ratings');
    }
};
