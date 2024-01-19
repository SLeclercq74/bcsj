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
        Schema::create('bcsj_team', function (Blueprint $table) {
            $table->id('teamID');
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });

        Schema::create('bcsj_category', function (Blueprint $table) {
            $table->id('categoryID');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('bcsj_game', function (Blueprint $table) {
            $table->id('gameID');
            $table->string('location');
            $table->time('time');
            $table->date('date');
            $table->unsignedBigInteger('receivingTeamID');
            $table->unsignedBigInteger('hostingTeamID');
            $table->unsignedBigInteger('categoryID');
            $table->boolean('isExterior');

            $table->foreign('receivingTeamID')->references('teamID')->on('bcsj_team');
            $table->foreign('hostingTeamID')->references('teamID')->on('bcsj_team');
            $table->foreign('categoryID')->references('categoryID')->on('bcsj_category');
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
        Schema::dropIfExists('bcsj_team');
        Schema::dropIfExists('bcsj_category');
        Schema::dropIfExists('bcsj_game');
    }
};
