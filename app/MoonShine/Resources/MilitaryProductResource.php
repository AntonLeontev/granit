<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\MilitaryProduct;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\HasOne;
use MoonShine\Fields\Switcher;
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

    protected array $with = ['video'];

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
                ->default((MilitaryProduct::max('position') ?? 0) + 1),

            Switcher::make('Показывать', 'is_enabled')
                ->hideOnForm()
                ->updateOnPreview(),

            Grid::make([
                Column::make('Данные на русском', [
                    Text::make('Название RU', 'title_ru'),
                    Text::make('Название сокращенно RU', 'short_title_ru'),
                    TinyMce::make('Описание RU', 'description_ru')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize lineheight | bullist numlist | table | alignleft aligncenter alignright | subscript superscript | removeformat')
                        ->menubar(''),
                    TinyMce::make('Характеристики RU', 'characteristics_ru')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize lineheight | bullist numlist | table | alignleft aligncenter alignright | subscript superscript | removeformat')
                        ->menubar(''),
                ])->columnSpan(6),
                Column::make('Данные на английском', [
                    Text::make('Название EN', 'title_en'),
                    Text::make('Название сокращенно EN', 'short_title_en'),
                    TinyMce::make('Описание EN', 'description_en')
                        ->nullable()
                        ->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize lineheight | bullist numlist | table | alignleft aligncenter alignright | subscript superscript | removeformat')
                        ->menubar(''),
                    TinyMce::make('Характеристики EN', 'characteristics_en')->nullable()->hideOnIndex()
                        ->toolbar('undo redo | bold italic underline | fontsize lineheight | bullist numlist | table | alignleft aligncenter alignright | subscript superscript | removeformat')
                        ->menubar(''),
                ])->columnSpan(6),
            ]),

            Image::make('Изображение', 'image')
                ->dir('military/images'),
            Image::make('Изображение в каталоге', 'thumbnail')
                ->dir('military/images'),
            File::make('3D модель', '3d_model')
                ->removable()
                ->keepOriginalFileName()
                ->dir('military/models')
                ->hint('Модели должны быть с расширением glb или gltf')
                ->hideOnIndex(),

            HasOne::make('Видео', 'video', resource: new MilitaryVideoResource)
                ->hideOnIndex(),
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
