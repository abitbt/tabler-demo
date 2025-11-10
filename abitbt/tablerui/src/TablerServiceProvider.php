<?php

namespace Tabler;

use Illuminate\View\ComponentAttributeBag;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Arr;

class TablerServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->bootComponentPath();
    }

    public function bootComponentPath(): void
    {
        if (file_exists(resource_path('views/tabler'))) {
            Blade::anonymousComponentPath(resource_path('views/tabler'), 'tabler');
        }

        Blade::anonymousComponentPath(__DIR__.'/../stubs/resources/views/tabler', 'tabler');
    }
}
