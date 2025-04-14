<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('top_games', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Game title
            $table->string('image'); // Path to game image
            $table->string('url'); // Game URL
            $table->integer('position')->unique(); // Position (1-3)
            $table->string('platform')->nullable(); // Platform (PC, PlayStation, etc.)
            $table->decimal('price', 8, 2)->nullable(); // Game price
            $table->decimal('discount', 5, 2)->nullable(); // Discount percentage
            $table->boolean('is_active')->default(true); // Active status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('top_games');
    }
};