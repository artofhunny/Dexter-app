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
// In the migration file
    Schema::create('top_utilities', function (Blueprint $table) {
        $table->id();
        $table->foreignId('app_id')->constrained()->onDelete('cascade');
        $table->integer('position')->unique(); // Will store 1-5 for the 5 positions
        $table->timestamps();
        
        // Add index for better performance
        $table->index(['position']);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_utilities');
    }
};
