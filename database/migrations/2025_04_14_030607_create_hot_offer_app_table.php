<?php
// database/migrations/YYYY_MM_DD_create_hot_offer_app_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotOfferAppTable extends Migration
{
    public function up()
    {
        Schema::create('hot_offer_app', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hot_offer_id')->constrained('hot_offers')->onDelete('cascade');
            $table->foreignId('app_id')->constrained('apps')->onDelete('cascade');
            $table->integer('card');  // To store the card number (1, 2, or 3)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hot_offer_app');
    }
}
