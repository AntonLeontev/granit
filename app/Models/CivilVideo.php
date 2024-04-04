<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CivilVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'civil_product_id',
        'path',
        'title_ru',
        'title_en',
    ];

    public function civilProduct(): BelongsTo
    {
        return $this->belongsTo(CivilProduct::class);
    }
}
