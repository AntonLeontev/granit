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
        Schema::table('military_products', function (Blueprint $table) {
            $table->string('is_enabled')->after('thumbnail')->default(1);
        });

        Schema::table('civil_products', function (Blueprint $table) {
            $table->string('is_enabled')->after('thumbnail')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('military_products', function (Blueprint $table) {
            $table->dropColumn('is_enabled');
        });

        Schema::table('civil_products', function (Blueprint $table) {
            $table->dropColumn('is_enabled');
        });
    }
};
