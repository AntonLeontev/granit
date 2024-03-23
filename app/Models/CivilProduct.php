<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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

    protected $casts = [
    ];

    public function videos(): MorphMany
    {
        return $this->morphMany(MilitaryVideo::class, 'videoable');
    }
}
