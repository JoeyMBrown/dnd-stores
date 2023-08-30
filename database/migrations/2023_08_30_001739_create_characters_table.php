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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->unsignedBigInteger('race_id');
            $table->unsignedBigInteger('class_id');
            $table->string('description');
            $table->boolean('alive')->default(true);
            $table->boolean('npc');
            $table->timestamps();

            $table->foreign('race_id')->references('id')->on('races');
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
