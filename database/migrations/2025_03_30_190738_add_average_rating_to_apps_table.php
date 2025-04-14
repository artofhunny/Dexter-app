<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('apps', function (Blueprint $table) {
            $table->decimal('average_rating', 4, 2)->default(0);
            $table->integer('total_reviews')->default(0);
        });
    }

    public function down()
    {
        Schema::table('apps', function (Blueprint $table) {
            $table->dropColumn(['average_rating', 'total_reviews']);
        });
    }
};
