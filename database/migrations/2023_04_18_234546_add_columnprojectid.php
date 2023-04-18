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
        Schema::table('bids', function (Blueprint $table) {
            
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('projects')->
            onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::table('payments', function (Blueprint $table) {
            
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('projects')->
            onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bids', function (Blueprint $table) {
            //
        });
        Schema::table('payments', function (Blueprint $table) {
            //
        });
    }
};
