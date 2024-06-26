<?php

namespace App\Models;

use App\Traits\HasPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CivilProduct extends Model
{
    use HasFactory;
    use HasPosition;

    protected $fillable = [
        'position',
        'title_ru',
        'title_en',
        'short_title_ru',
        'short_title_en',
        'description_ru',
        'description_en',
        'characteristics_ru',
        'characteristics_en',
        'image',
        '3d_model',
    ];

    protected $casts = [
    ];

    public function video(): HasOne
    {
        return $this->hasOne(CivilVideo::class);
    }

    protected static function booted(): void
    {
        static::created(function (Model $product) {
            static::updatePosition($product);
        });

        static::updated(function (Model $product) {
            static::updatePosition($product);
        });
    }
}
