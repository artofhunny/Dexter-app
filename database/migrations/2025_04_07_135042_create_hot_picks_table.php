<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 // database/migrations/xxxx_xx_xx_create_hot_picks_table.php

    public function up()
    {   
    Schema::create('hot_picks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('app_id')->constrained()->onDelete('cascade');
        $table->integer('position')->unique();
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hot_picks');
    }
};
