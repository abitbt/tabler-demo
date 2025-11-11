# Laravel Package Development Reference

> Reference documentation for developing Laravel packages (Laravel 12)

## Service Providers

Service providers are the core integration point for Laravel packages.

### Basic Structure

```php
<?php

namespace YourVendor\YourPackage;

use Illuminate\Support\ServiceProvider;

class YourPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind services into the container
        // Merge configuration files
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load routes, views, migrations, etc.
        // Publish resources
        // Register commands
    }
}
```

### Register Method
Use for:
- Binding services into the container
- Merging configuration files
- Registering singletons

```php
public function register(): void
{
    // Merge config from package
    $this->mergeConfigFrom(
        __DIR__.'/../config/tabler.php',
        'tabler'
    );

    // Register singleton
    $this->app->singleton('tabler', function ($app) {
        return new Tabler($app['config']['tabler']);
    });
}
```

### Boot Method
Use for:
- Loading resources (views, translations, routes)
- Publishing resources
- Registering commands
- Setting up event listeners

```php
public function boot(): void
{
    // Load views
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'tabler');

    // Load translations
    $this->loadTranslationsFrom(__DIR__.'/../lang', 'tabler');

    // Load routes (if needed)
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    // Publish resources
    $this->publishResources();

    // Register commands
    if ($this->app->runningInConsole()) {
        $this->commands([
            InstallCommand::class,
        ]);
    }
}
```

## Publishing Resources

### Configuration Files

```php
public function boot(): void
{
    // Publish config
    $this->publishes([
        __DIR__.'/../config/tabler.php' => config_path('tabler.php'),
    ], 'tabler-config');
}
```

**Usage:**
```bash
php artisan vendor:publish --tag=tabler-config
```

### Merging Configuration

```php
public function register(): void
{
    $this->mergeConfigFrom(
        __DIR__.'/../config/tabler.php',
        'tabler'
    );
}
```

**Important:** Only merges first-level arrays. Deep merging is not supported.

### Views

```php
public function boot(): void
{
    // Load views with namespace
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'tabler');

    // Publish views (allow user overrides)
    $this->publishes([
        __DIR__.'/../resources/views' => resource_path('views/vendor/tabler'),
    ], 'tabler-views');
}
```

**Usage in Blade:**
```blade
{{-- Use package view --}}
<x-tabler::button>Click</x-tabler::button>

{{-- Override: create resources/views/vendor/tabler/button.blade.php --}}
```

### Migrations

```php
public function boot(): void
{
    // Publish migrations
    $this->publishesMigrations([
        __DIR__.'/../database/migrations' => database_path('migrations'),
    ], 'tabler-migrations');
}
```

Laravel automatically updates timestamps in migration filenames.

### Public Assets (CSS, JS, Images)

```php
public function boot(): void
{
    $this->publishes([
        __DIR__.'/../resources/dist' => public_path('vendor/tabler'),
    ], 'tabler-assets');
}
```

**Update assets with --force:**
```bash
php artisan vendor:publish --tag=tabler-assets --force
```

### Multiple Publish Groups

```php
public function boot(): void
{
    // Config
    $this->publishes([
        __DIR__.'/../config/tabler.php' => config_path('tabler.php'),
    ], 'tabler-config');

    // Views
    $this->publishes([
        __DIR__.'/../resources/views' => resource_path('views/vendor/tabler'),
    ], 'tabler-views');

    // Assets
    $this->publishes([
        __DIR__.'/../resources/dist' => public_path('vendor/tabler'),
    ], 'tabler-assets');

    // Publish everything
    $this->publishes([
        __DIR__.'/../config/tabler.php' => config_path('tabler.php'),
        __DIR__.'/../resources/views' => resource_path('views/vendor/tabler'),
        __DIR__.'/../resources/dist' => public_path('vendor/tabler'),
    ], 'tabler');
}
```

**Usage:**
```bash
# Publish specific group
php artisan vendor:publish --tag=tabler-config

# Publish all package resources
php artisan vendor:publish --tag=tabler

# Publish all vendor resources
php artisan vendor:publish
```

## View Components in Packages

### Anonymous Components (Recommended for UI Libraries)

```php
public function boot(): void
{
    // Register views with namespace
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'tabler');
}
```

**Directory structure:**
```
resources/views/
└── components/
    ├── button.blade.php      → <x-tabler::button />
    ├── alert.blade.php       → <x-tabler::alert />
    └── form/
        └── input.blade.php   → <x-tabler::form.input />
```

### Class-Based Components

**Manual registration:**
```php
use Illuminate\Support\Facades\Blade;

public function boot(): void
{
    Blade::component('tabler-alert', AlertComponent::class);
}
```

**Auto-loading by convention:**
```php
use Illuminate\Support\Facades\Blade;

public function boot(): void
{
    Blade::componentNamespace('YourVendor\\Components', 'tabler');
}
```

Then reference: `<x-tabler::alert />`

## Routes

```php
public function boot(): void
{
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
}
```

**Important:** Routes are ignored if application routes are cached.

## Translations

```php
public function boot(): void
{
    // Load translations
    $this->loadTranslationsFrom(__DIR__.'/../lang', 'tabler');

    // Publish translations
    $this->publishes([
        __DIR__.'/../lang' => lang_path('vendor/tabler'),
    ], 'tabler-lang');
}
```

**Usage:**
```php
__('tabler::messages.welcome')
```

### JSON Translations

```php
public function boot(): void
{
    $this->loadJsonTranslationsFrom(__DIR__.'/../lang');
}
```

## Commands

```php
use App\Console\Commands\InstallCommand;

public function boot(): void
{
    if ($this->app->runningInConsole()) {
        $this->commands([
            InstallCommand::class,
            PublishCommand::class,
        ]);
    }
}
```

### Optimization Commands

```php
public function boot(): void
{
    $this->optimizes(
        optimize: 'tabler:optimize',
        clear: 'tabler:clear',
    );
}
```

These run during `php artisan optimize` and `php artisan optimize:clear`.

## Package Discovery

### Composer.json Configuration

```json
{
    "name": "abitbt/tablerui",
    "description": "Laravel Blade components for Tabler UI",
    "type": "library",
    "require": {
        "php": "^8.1",
        "illuminate/support": "^10.0|^11.0|^12.0",
        "illuminate/view": "^10.0|^11.0|^12.0"
    },
    "autoload": {
        "psr-4": {
            "Tabler\\": "src/"
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Tabler\\TablerServiceProvider"
            ],
            "aliases": {
                "Tabler": "Tabler\\Facades\\Tabler"
            }
        }
    }
}
```

### Disable Discovery

Users can disable in their `composer.json`:

```json
"extra": {
    "laravel": {
        "dont-discover": [
            "abitbt/tablerui"
        ]
    }
}
```

## About Command Integration

```php
use Illuminate\Foundation\Console\AboutCommand;

public function boot(): void
{
    AboutCommand::add('Tabler UI', fn () => [
        'Version' => '1.0.0',
        'Components' => '52+',
    ]);
}
```

Shows info when running `php artisan about`.

## Configuration Best Practices

### Config File Structure

```php
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | CDN Configuration
    |--------------------------------------------------------------------------
    */
    'cdn' => [
        'enabled' => env('TABLER_CDN_ENABLED', false),
        'css' => 'https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css',
        'js' => 'https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js',
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme Configuration
    |--------------------------------------------------------------------------
    */
    'theme' => [
        'dark_mode' => env('TABLER_DARK_MODE', false),
        'color_scheme' => env('TABLER_COLOR_SCHEME', 'auto'), // 'light', 'dark', 'auto'
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Defaults
    |--------------------------------------------------------------------------
    */
    'defaults' => [
        'button' => [
            'color' => 'primary',
            'size' => 'md',
        ],
        'card' => [
            'shadow' => true,
        ],
    ],
];
```

**Never use closures in config files** - they can't be cached.

## Complete Service Provider Example

```php
<?php

namespace Tabler;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\AboutCommand;
use Tabler\Commands\InstallCommand;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/tabler.php',
            'tabler'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load views
        $this->loadViewsFrom(
            __DIR__.'/../resources/views',
            'tabler'
        );

        // Publish resources
        $this->publishResources();

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }

        // Add to about command
        AboutCommand::add('Tabler UI', fn () => [
            'Version' => '1.0.0',
        ]);
    }

    /**
     * Publish package resources.
     */
    protected function publishResources(): void
    {
        // Config
        $this->publishes([
            __DIR__.'/../config/tabler.php' => config_path('tabler.php'),
        ], 'tabler-config');

        // Views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/tabler'),
        ], 'tabler-views');

        // Assets
        $this->publishes([
            __DIR__.'/../resources/dist' => public_path('vendor/tabler'),
        ], 'tabler-assets');
    }
}
```

## Testing Packages

Use [Orchestral Testbench](https://github.com/orchestral/testbench):

```php
use Orchestra\Testbench\TestCase;

class ComponentTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Tabler\TablerServiceProvider::class,
        ];
    }

    public function test_button_renders()
    {
        $view = $this->blade('<x-tabler::button>Click</x-tabler::button>');

        $view->assertSee('Click');
        $view->assertSee('btn');
    }
}
```

## Common Patterns

### Helper Functions

Create `src/helpers.php`:

```php
<?php

if (! function_exists('tabler_asset')) {
    function tabler_asset(string $path): string
    {
        return asset('vendor/tabler/'.$path);
    }
}
```

Load in `composer.json`:

```json
"autoload": {
    "psr-4": {
        "Tabler\\": "src/"
    },
    "files": [
        "src/helpers.php"
    ]
}
```

### Facades

```php
// src/Facades/Tabler.php
namespace Tabler\Facades;

use Illuminate\Support\Facades\Facade;

class Tabler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tabler';
    }
}
```

Register in ServiceProvider:

```php
public function register(): void
{
    $this->app->singleton('tabler', function ($app) {
        return new \Tabler\Tabler($app['config']['tabler']);
    });
}
```

## Package Structure Recommendation

```
tabler-blade/
├── config/
│   └── tabler.php
├── resources/
│   ├── views/
│   │   └── components/
│   │       ├── button.blade.php
│   │       └── ...
│   └── dist/          (if bundling assets)
│       ├── css/
│       └── js/
├── src/
│   ├── Commands/
│   │   └── InstallCommand.php
│   ├── Facades/
│   │   └── Tabler.php
│   ├── TablerServiceProvider.php
│   └── helpers.php
├── tests/
│   └── ComponentTest.php
├── .gitignore
├── composer.json
├── LICENSE
└── README.md
```
