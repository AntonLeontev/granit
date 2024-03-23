<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\MorphMany;

class CivilProduct extends Model
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
        'image',
        '3d_model',
    ];

    public function videos(): MorphMany
    {
        return $this->morphMany(Video::class, 'videoable');
    }
}
