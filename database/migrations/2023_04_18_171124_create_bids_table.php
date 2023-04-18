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
        Schema::create('bids', function (Blueprint $table) {
             $table->id('bid_id');
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
            $table->double('amount_bid');
            $table->boolean('status_bid');
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
        Schema::dropIfExists('bids');
    }
};
