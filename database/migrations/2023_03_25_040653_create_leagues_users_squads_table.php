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
        Schema::create('leagues_users_squads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('squad_id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('league_id');

            $table->foreign('squad_id')->references('id')->on('squads');
            $table->foreign('player_id')->references('id')->on('users');
            $table->foreign('league_id')->references('id')->on('leagues');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leagues_users_squads');
    }
};
