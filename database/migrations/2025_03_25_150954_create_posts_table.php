<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id(); // Ensure this line exists for auto-incrementing primary key
        $table->uuid('user_id'); // Ensure this matches your users table ID type
        $table->string('title');
        $table->string('slug')->unique();
        $table->text('excerpt')->nullable();
        $table->longText('content');
        $table->string('featured_image')->nullable();
        $table->json('categories')->nullable();
        $table->json('tags')->nullable();
        $table->enum('status', ['draft', 'published'])->default('draft');
        $table->timestamp('scheduled_at')->nullable();
        $table->boolean('allow_comments')->default(true);
        $table->boolean('is_featured')->default(false);
        $table->string('meta_title')->nullable();
        $table->text('meta_description')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
