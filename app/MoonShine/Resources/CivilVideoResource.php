<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\CivilVideo;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\File;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Traits\Resource\ResourceWithParent;

/**
 * @extends ModelResource<CivilVideo>
 */
class CivilVideoResource extends ModelResource
{
    use ResourceWithParent;

    protected string $model = CivilVideo::class;

    protected string $title = 'Видео';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()->hideOnAll(),
                Grid::make([
                    Column::make([
                        Text::make('Название RU', 'title_ru')
                            ->nullable(),
                        File::make('Видео RU', 'path_ru')
                            ->removable()
                            ->dir('civil/video')
                            ->allowedExtensions(['mp4'])
                            ->keepOriginalFileName(),
                    ])
                        ->columnSpan(6),
                    Column::make([
                        Text::make('Название EN', 'title_en')
                            ->nullable(),
                        File::make('Видео EN', 'path_en')
                            ->removable()
                            ->dir('civil/video/en')
                            ->allowedExtensions(['mp4'])
                            ->keepOriginalFileName(),
                    ])
                        ->columnSpan(6),
                ]),
                Hidden::make('civil_product_id', 'civil_product_id')
                    ->default($this->getParentId())
                    ->hideOnIndex(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title_ru' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'path' => ['file', 'mimetypes:video/mp4', 'nullable'],
            'path_ru' => ['file', 'mimetypes:video/mp4', 'nullable'],
            'path_en' => ['file', 'mimetypes:video/mp4', 'nullable'],
            'civil_product_id' => ['required', 'exists:civil_products,id'],
        ];
    }

    public function getActiveActions(): array
    {
        return ['create', 'update', 'delete'];
    }

    public function search(): array
    {
        return [];
    }

    protected function getParentResourceClassName(): string
    {
        return CivilProductResource::class;
    }

    protected function getParentRelationName(): string
    {
        return 'civilProduct';
    }
}
