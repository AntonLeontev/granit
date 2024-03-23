<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\MilitaryVideo;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Traits\Resource\ResourceWithParent;

/**
 * @extends ModelResource<MilitaryVideo>
 */
class MilitaryVideoResource extends ModelResource
{
    use ResourceWithParent;

    protected string $model = MilitaryVideo::class;

    protected string $title = 'Видео';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable()->hideOnAll(),
                Text::make('Название RU', 'title_ru')
                    ->nullable(),
                Text::make('Название EN', 'title_en')
                    ->nullable(),
                File::make('Видео', 'path')
                    ->removable()
                    ->dir('military/video')
                    ->allowedExtensions(['mp4'])
                    ->keepOriginalFileName(),
                Text::make('military_product_id', 'military_product_id')
                    ->default($this->getParentId())
                    ->hideOnIndex()
                    ->readonly(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title_ru' => ['nullable', 'string', 'max:255'],
            'title_en' => ['nullable', 'string', 'max:255'],
            'path' => ['required', 'file', 'mimetypes:video/mp4'],
            'military_product_id' => ['required', 'exists:military_products,id'],
        ];
    }

    public function getActiveActions(): array
    {
        return ['create', 'update', 'delete', 'massDelete'];
    }

    public function search(): array
    {
        return [];
    }

    protected function getParentResourceClassName(): string
    {
        return MilitaryProductResource::class;
    }

    protected function getParentRelationName(): string
    {
        return 'product';
    }
}
