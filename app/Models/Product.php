<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'title_ru',
        'title_en',
        'description_ru',
        'description_en',
        'characteristics_ru',
        'characteristics_en',
        'category',
        'image',
        '3d_model',
    ];

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }
}
