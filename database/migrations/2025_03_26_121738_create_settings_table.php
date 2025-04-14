<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('tagline');
            $table->string('wp_url');
            $table->string('site_url');
            $table->string('admin_email');
            $table->boolean('users_can_register')->default(false);
            $table->string('default_role')->default('subscriber');
            $table->string('timezone')->default('UTC');
            $table->string('date_format')->default('F j, Y');
            $table->string('time_format')->default('g:i a');
            $table->string('start_of_week')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};