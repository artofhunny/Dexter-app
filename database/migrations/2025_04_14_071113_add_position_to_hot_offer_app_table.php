<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('hot_offer_app', function (Blueprint $table) {
        $table->integer('position')->nullable()->default(0);  // Add the position column
    });
}

public function down()
{
    Schema::table('hot_offer_app', function (Blueprint $table) {
        $table->dropColumn('position');  // Drop the position column if rolling back
    });
}

};
