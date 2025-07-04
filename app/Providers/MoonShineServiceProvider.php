<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Layouts\MoonShineLayout;

use App\MoonShine\Resources\App\Models\UserResource;
use App\MoonShine\Resources\EmployeeResource;
use App\MoonShine\Resources\OwnerResource;
use App\MoonShine\Resources\AnimalResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                UserResource::class,
                EmployeeResource::class,
                OwnerResource::class,
                AnimalResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
        
        // Logo
        $config
            ->logo('/images/logo.png')
            ->layout(MoonShineLayout::class);
    }
}
