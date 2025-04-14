<?php
// database/migrations/YYYY_MM_DD_create_hot_offers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotOffersTable extends Migration
{
    public function up()
    {
        Schema::create('hot_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // You can add more fields like title, description, etc.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hot_offers');
    }
}
