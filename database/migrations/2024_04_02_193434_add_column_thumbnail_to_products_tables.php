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
            $table->string('thumbnail')->after('image')->nullable();
        });

        Schema::table('civil_products', function (Blueprint $table) {
            $table->string('thumbnail')->after('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('military_products', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
        });

        Schema::table('civil_products', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
        });
    }
};
