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
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Product>
 */
class MilitaryProductResource extends ModelResource
{
    protected string $model = MilitaryProduct::class;

    protected string $title = 'Военная продукция';

    protected array $with = ['videos'];

    protected string $column = 'title_ru';

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
                    TinyMce::make('Описание RU', 'description_ru')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize | bullist numlist | table | alignleft aligncenter alignright')
                        ->menubar(''),
                    TinyMce::make('Характеристики RU', 'characteristics_ru')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize | bullist numlist | table | alignleft aligncenter alignright')
                        ->menubar(''),
                ])->columnSpan(6),
                Column::make('Данные на английском', [
                    Text::make('Название EN', 'title_en'),
                    TinyMce::make('Описание EN', 'description_en')
                        ->nullable()
                        ->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize | bullist numlist | table | alignleft aligncenter alignright')
                        ->menubar(''),
                    TinyMce::make('Характеристики EN', 'characteristics_en')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize | bullist numlist | table | alignleft aligncenter alignright')
                        ->menubar(''),
                ])->columnSpan(6),
            ]),

            Image::make('Изображение', 'image')
                ->dir('military/images'),
            File::make('3D модель', '3d_model')
                ->removable()
                ->keepOriginalFileName()
                ->dir('military/models')
                ->hint('Модели должны быть с расширением glb или gltf'),

            HasMany::make('Видео', 'videos', resource: new MilitaryVideoResource)
                ->hideOnIndex()
                ->creatable(),
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

    public function search(): array
    {
        return [];
    }

    // protected function resolveOrder(): static
    // {
    //     if (($sort = request('sort')) && is_string($sort)) {
    //         $column = ltrim($sort, '-');
    //         $direction = str_starts_with($sort, '-') ? 'desc' : 'asc';

    //         if ($column === 'author') {
    //             $this->query()
    //                 ->select('posts.*')
    //                 ->leftJoin('users', 'users.id', '=', 'posts.author_id')
    //                 ->orderBy('users.name', $direction);

    //             return $this;
    //         }
    //     }

    //     return parent::resolveOrder();
    // }
}
