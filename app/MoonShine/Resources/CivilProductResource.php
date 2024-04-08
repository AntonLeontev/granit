<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\CivilProduct;
use Illuminate\Database\Eloquent\Model;
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
 * @extends ModelResource<CivilProduct>
 */
class CivilProductResource extends ModelResource
{
    protected string $model = CivilProduct::class;

    protected string $title = 'Гражданская продукция';

    protected array $with = ['videos'];

    protected string $column = 'title_ru';

    protected string $sortColumn = 'position'; // Поле сортировки по умолчанию

    protected string $sortDirection = 'ASC'; // Тип сортировки по умолчанию

    public function fields(): array
    {
        return [
            ID::make()->sortable()->hideOnIndex()->hideOnDetail(),

            Number::make('#', 'position')
                ->hideOnForm()
                ->hideOnDetail(),
            Number::make('Позиция в каталоге', 'position')
                ->hideOnIndex()
                ->default((CivilProduct::max('position') ?? 0) + 1),

            Grid::make([
                Column::make('Данные на русском', [
                    Text::make('Название RU', 'title_ru'),
                    Text::make('Название сокращенно RU', 'short_title_ru'),
                    TinyMce::make('Описание RU', 'description_ru')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize | bullist numlist | table | alignleft aligncenter alignright')
                        ->menubar(''),
                    TinyMce::make('Характеристики RU', 'characteristics_ru')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize | bullist numlist | table | alignleft aligncenter alignright')
                        ->menubar(''),
                ])->columnSpan(6),
                Column::make('Данные на английском', [
                    Text::make('Название EN', 'title_en'),
                    Text::make('Название сокращенно EN', 'short_title_en'),
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

            Image::make('Изображение в товаре', 'image')
                ->dir('civil/images'),
            Image::make('Изображение в каталоге', 'thumbnail')
                ->dir('civil/images'),
            File::make('3D модель', '3d_model')
                ->removable()
                ->keepOriginalFileName()
                ->dir('civil/models')
                ->hint('Модели должны быть с расширением glb или gltf'),

            HasMany::make('Видео', 'videos', resource: new CivilVideoResource)
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
            'short_title_ru' => ['required', 'string', 'max:300'],
            'short_title_en' => ['required', 'string', 'max:300'],
            'description_ru' => ['nullable', 'string', 'max:5000'],
            'description_en' => ['nullable', 'string', 'max:5000'],
            'characteristics_ru' => ['nullable', 'string', 'max:15000'],
            'characteristics_en' => ['nullable', 'string', 'max:15000'],
            'image' => ['nullable', 'image'],
            'thumbnail' => ['nullable', 'image'],
            '3d_model' => ['nullable', 'file'],
        ];
    }

    public function search(): array
    {
        return [];
    }
}
