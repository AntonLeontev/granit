<?php

use App\Models\CivilProduct;
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
        Schema::create('civil_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CivilProduct::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('civil_videos');
    }
};
