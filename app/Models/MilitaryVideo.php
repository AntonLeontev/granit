<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MilitaryVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'military_product_id',
        'path',
        'title_ru',
        'title_en',
    ];

    public function militaryProduct(): BelongsTo
    {
        return $this->belongsTo(MilitaryProduct::class);
    }
}
