<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('apps', function (Blueprint $table) {
            $table->string('gecko_id')->nullable()->after('app_category'); 
        });
    }
    
    public function down()
    {
        Schema::table('apps', function (Blueprint $table) {
            $table->dropColumn('gecko_id');
        });
    }
    
};
