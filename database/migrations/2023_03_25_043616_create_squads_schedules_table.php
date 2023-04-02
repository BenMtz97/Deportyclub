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
        Schema::create('squads_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('squad_id');
            $table->unsignedBigInteger('schedule_id');

            $table->foreign('squad_id')->references('id')->on('squads');
            $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('squads_schedules');
    }
};
