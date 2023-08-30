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
        Schema::create('character_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->integer('level');
            $table->integer('experience');
            $table->integer('health');
            $table->integer('charisma');
            $table->integer('strength');
            $table->integer('wisdom');
            $table->integer('intelligence');
            $table->integer('dexterity');
            $table->integer('constitution');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('character_id')->references('id')->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_stats');
    }
};
