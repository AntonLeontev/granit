<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CivilProductResource;
use App\MoonShine\Resources\CivilVideoResource;
use App\MoonShine\Resources\MilitaryProductResource;
use App\MoonShine\Resources\MilitaryVideoResource;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\MoonShine;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    public function register(): void
    {
        moonshine()->home(MilitaryProductResource::class);
    }

    protected function resources(): array
    {
        return [
            new MilitaryVideoResource,
            new CivilVideoResource,
        ];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            // MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
            //    MenuItem::make(
            //        static fn() => __('moonshine::ui.resource.admins_title'),
            //        new MoonShineUserResource()
            //    ),
            //    MenuItem::make(
            //        static fn() => __('moonshine::ui.resource.role_title'),
            //        new MoonShineUserRoleResource()
            //    ),
            // ]),
            MenuItem::make('Военная продукция', new MilitaryProductResource()),
            MenuItem::make('Гражданская продукция', new CivilProductResource()),

        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
