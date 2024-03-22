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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->default(0);
            $table->string('title_ru', 300);
            $table->string('title_en', 300);
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('characteristics_ru')->nullable();
            $table->text('characteristics_en')->nullable();
            $table->string('category');
            $table->string('image')->nullable();
            $table->string('3d_model')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
