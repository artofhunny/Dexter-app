<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id'); // Ensure it matches users.id type
            $table->string('app_name')->unique();
            $table->string('app_icon')->nullable();
            $table->string('app_category');

            // Social Media & Website URLs with indexing
            $table->string('website_url')->nullable()->index();
            $table->string('instagram_url')->nullable()->index();
            $table->string('facebook_url')->nullable()->index();
            $table->string('x_url')->nullable()->index();

            $table->json('app_images')->nullable();
            $table->text('about_intro')->nullable();
            $table->text('about_overview')->nullable();
            $table->text('about_features')->nullable();
            $table->text('about_get_started')->nullable();
            $table->json('app_tags')->nullable();
            $table->json('faq')->nullable();

            $table->unsignedBigInteger('likes')->default(0);
            $table->unsignedBigInteger('followers')->default(0);
            $table->boolean('is_verified')->default(false);
            $table->timestamps();

            // Define Foreign Key Constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
