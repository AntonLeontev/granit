<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\CivilProduct;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<CivilProduct>
 */
class CivilProductResource extends ModelResource
{
    protected string $model = CivilProduct::class;

    protected string $title = 'Гражданская продукция';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
