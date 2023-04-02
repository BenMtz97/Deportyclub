<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('local_points');
            $table->integer('visitor_points');
            $table->unsignedBigInteger('local_id');
            $table->unsignedBigInteger('visitor_id');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('league_id');
            $table->unsignedBigInteger('referee_id');

            $table->foreign('local_id')->references('id')->on('squads');
            $table->foreign('visitor_id')->references('id')->on('squads');
            $table->foreign('field_id')->references('id')->on('fields');
            $table->foreign('league_id')->references('id')->on('leagues');
            $table->foreign('referee_id')->references('id')->on('users');
            $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
