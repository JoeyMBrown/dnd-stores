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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('description');
            $table->integer('gold');
            $table->float('price_modifier', 10, 2);
            $table->unsignedBigInteger('character_id');
            $table->unsignedBigInteger('shop_type_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('shop_type_id')->references('id')->on('shop_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
