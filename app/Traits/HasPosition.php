<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasPosition
{
    private static function updatePosition(Model $product): void
    {
        $exists = static::whereNot('id', $product->id)
            ->where('position', $product->position)->exists();

        if (! $exists) {
            return;
        }

        $models = static::where('position', '>=', $product->position)
            ->whereNot('id', $product->id)
            ->orderBy('position')
            ->get(['id', 'position']);

        foreach ($models as $model) {
            $model->updateQuietly(['position' => $model->position + 1]);
        }
    }
}
