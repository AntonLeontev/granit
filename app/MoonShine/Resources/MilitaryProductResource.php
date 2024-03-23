<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\MilitaryProduct;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\MorphMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Product>
 */
class MilitaryProductResource extends ModelResource
{
    protected string $model = MilitaryProduct::class;

    protected string $title = 'Продукция';

    protected array $with = ['videos'];

    protected string $column = 'title';

    public function fields(): array
    {
        return [
            ID::make()->sortable()->hideOnIndex()->hideOnDetail(),
            Number::make('Позиция в списке', 'position')
                ->default((MilitaryProduct::max('position') ?? 0) + 1)
                ->hideOnDetail()
                ->hideOnIndex(),

            Grid::make([
                Column::make('Данные на русском', [
                    Text::make('Название RU', 'title_ru'),
                    TinyMce::make('Описание RU', 'description_ru')->nullable()->hideOnIndex(),
                    TinyMce::make('Характеристики RU', 'characteristics_ru')->nullable()->hideOnIndex(),
                ])->columnSpan(6),
                Column::make('Данные на английском', [
                    Text::make('Название EN', 'title_en'),
                    TinyMce::make('Описание EN', 'description_en')->nullable()->hideOnIndex(),
                    TinyMce::make('Характеристики EN', 'characteristics_en')->nullable()->hideOnIndex(),
                ])->columnSpan(6),
            ]),

            Image::make('Изображение', 'image')
                ->dir('military/images'),
            File::make('3D модель', '3d_model')
                ->removable()
                ->dir('military/models'),

            MorphMany::make('Видео', 'videos'),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'position' => ['required', 'min:1', 'integer'],
            'title_ru' => ['required', 'string', 'max:300'],
            'title_en' => ['required', 'string', 'max:300'],
            'description_ru' => ['nullable', 'string', 'max:5000'],
            'description_en' => ['nullable', 'string', 'max:5000'],
            'characteristics_ru' => ['nullable', 'string', 'max:5000'],
            'characteristics_en' => ['nullable', 'string', 'max:5000'],
            'image' => [
                'nullable',
                'image',
                // Rule::dimensions()->minWidth(760)->minHeight(900),
            ],
            '3d_model' => ['nullable', 'file'],
        ];
    }

    public function pageComponents(): array
    {
        return [];
    }
}
