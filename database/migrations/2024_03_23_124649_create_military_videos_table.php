<?php

use App\Models\MilitaryProduct;
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
        Schema::create('military_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MilitaryProduct::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('path');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('military_videos');
    }
};
