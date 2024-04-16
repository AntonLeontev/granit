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
        Schema::table('civil_videos', function (Blueprint $table) {
            $table->string('path_ru');
            $table->string('path_en');
        });

        Schema::table('military_videos', function (Blueprint $table) {
            $table->string('path_ru');
            $table->string('path_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('civil_videos', function (Blueprint $table) {
            $table->dropColumn(['path_ru', 'path_en']);
        });

        Schema::table('military_videos', function (Blueprint $table) {
            $table->dropColumn(['path_ru', 'path_en']);
        });
    }
};
