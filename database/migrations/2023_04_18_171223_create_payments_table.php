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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('user_id')
            ->constrained() 
            ->references('user_id')
            ->on('users')
            ->onDelete('cascade');
            // $table->foreignId('project_id')
            // ->constrained() 
            // ->references('project_id')
            // ->on('projects')
            // ->onDelete('cascade');
            $table->double('payment_amount');
            $table->boolean('payment_status');
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
        Schema::dropIfExists('payments');
    }
};
