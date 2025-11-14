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
├── CHANGELOG.md
├── composer.json
├── LICENSE
└── README.md
```

## Version Management & Releases

### Semantic Versioning

Follow [Semantic Versioning 2.0.0](https://semver.org/):

**Given a version number MAJOR.MINOR.PATCH (e.g., 2.3.1):**

- **MAJOR** (2): Breaking changes, backwards-incompatible API changes
- **MINOR** (3): New features, backwards-compatible additions
- **PATCH** (1): Bug fixes, backwards-compatible fixes

### Version Number in Code

Update version in multiple places:

**1. composer.json:**
```json
{
    "name": "abitbt/tablerui",
    "version": "1.2.0",
    "description": "Laravel Blade components for Tabler UI"
}
```

**2. ServiceProvider (for AboutCommand):**
```php
AboutCommand::add('Tabler UI', fn () => [
    'Version' => '1.2.0',
    'Components' => '52+',
]);
```

**3. Optional: Create a Version class:**
```php
// src/Version.php
namespace Tabler;

class Version
{
    public const VERSION = '1.2.0';
    public const MAJOR = 1;
    public const MINOR = 2;
    public const PATCH = 0;
}
```

### CHANGELOG.md

Maintain a changelog following [Keep a Changelog](https://keepachangelog.com/):

```markdown
# Changelog

All notable changes to `tabler-blade` will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- Tooltip component with Bootstrap integration
- Dark mode support for all components

### Changed
- Button component now uses `variant` prop instead of `outline` boolean

### Deprecated
- `outline` prop on button component (use `variant="outline"` instead)
  Will be removed in v2.0.0

### Fixed
- Alert component dismissible button alignment
- Card component padding issues with `active` state

### Security
- Updated dependencies to fix security vulnerabilities

## [1.2.0] - 2025-01-15

### Added
- Card component with 50+ variations
- Badge component with all Tabler colors
- Tag component
- Comprehensive test suite

### Changed
- Improved button component accessibility
- Updated documentation with examples

### Fixed
- Button icon spacing in Safari
- Alert dismissible button not working

## [1.1.0] - 2024-12-01

### Added
- Alert component with dismissible functionality
- Button component with icon support

### Fixed
- Initial release fixes

## [1.0.0] - 2024-11-15

### Added
- Initial release
- Basic button, alert components
- Service provider setup
- Package configuration

[Unreleased]: https://github.com/abitbt/tabler-blade/compare/v1.2.0...HEAD
[1.2.0]: https://github.com/abitbt/tabler-blade/compare/v1.1.0...v1.2.0
[1.1.0]: https://github.com/abitbt/tabler-blade/compare/v1.0.0...v1.1.0
[1.0.0]: https://github.com/abitbt/tabler-blade/releases/tag/v1.0.0
```

### Release Process

#### 1. Prepare Release

```bash
# Ensure working directory is clean
git status

# Run all tests
php artisan test

# Run static analysis (if using)
./vendor/bin/phpstan analyze

# Run code formatting
./vendor/bin/pint
```

#### 2. Update Version Numbers

Update version in:
- `composer.json`
- `TablerServiceProvider.php` (AboutCommand)
- `Version.php` (if using)

#### 3. Update CHANGELOG.md

Move items from `[Unreleased]` to new version section:

```markdown
## [1.3.0] - 2025-02-01

### Added
- New features from unreleased section

## [1.2.0] - 2025-01-15
...
```

#### 4. Commit Changes

```bash
# Commit version bump
git add .
git commit -m "chore: bump version to 1.3.0"
```

#### 5. Create Git Tag

```bash
# Create annotated tag
git tag -a v1.3.0 -m "Release version 1.3.0"

# Push commits and tags
git push origin main
git push origin v1.3.0
```

#### 6. Create GitHub Release

On GitHub, create a new release:
- Tag: `v1.3.0`
- Title: `v1.3.0 - February 2025`
- Description: Copy changelog section for this version

#### 7. Submit to Packagist

Packagist automatically detects new tags. Verify at:
```
https://packagist.org/packages/abitbt/tabler-blade
```

### Breaking Changes Management

#### Deprecation Strategy

**1. Mark as Deprecated (Minor Version):**

In component:
```blade
@props([
    'outline' => null,  // Deprecated: use variant="outline" instead
    'variant' => null,
])

@if($outline !== null)
    @env('local', 'testing')
        @php
            trigger_error(
                'The "outline" prop is deprecated and will be removed in v2.0.0. ' .
                'Use variant="outline" instead.',
                E_USER_DEPRECATED
            );
        @endphp
    @endenv
    @php
        $variant = 'outline';  // Map deprecated prop to new prop
    @endphp
@endif
```

In CHANGELOG.md:
```markdown
### Deprecated
- `outline` prop on button component
  - Use `variant="outline"` instead
  - Will be removed in v2.0.0
  - Migration: `<x-button outline>` → `<x-button variant="outline">`
```

**2. Keep Functionality (One Major Version):**
- Keep deprecated features working in all minor versions
- Remove only in next major version (e.g., v1.x.x → v2.0.0)

**3. Provide Migration Guide:**

Create `UPGRADE.md`:

```markdown
# Upgrade Guide

## Upgrading to 2.0 from 1.x

### Button Component

**Removed `outline` prop:**

```blade
<!-- Before (1.x) -->
<x-tabler::button outline color="primary">Click</x-tabler::button>

<!-- After (2.0) -->
<x-tabler::button variant="outline" color="primary">Click</x-tabler::button>
```

**Search and replace:**
```bash
# Find all instances
grep -r "outline" resources/views/

# Example sed command (test first!)
find resources/views -name "*.blade.php" -exec sed -i '' 's/outline/variant="outline"/g' {} \;
```
```

### Version Compatibility

#### Laravel Version Support

Support current + previous 2 major Laravel versions:

```json
{
    "require": {
        "php": "^8.1|^8.2|^8.3",
        "illuminate/support": "^10.0|^11.0|^12.0"
    }
}
```

#### PHP Version Support

Support current + previous 2 minor PHP versions:

- PHP 8.3 (current) ✓
- PHP 8.2 ✓
- PHP 8.1 ✓
- PHP 8.0 ❌ (EOL)

Update when new PHP version releases.

### Release Automation

#### GitHub Actions for Releases

`.github/workflows/release.yml`:

```yaml
name: Release

on:
  push:
    tags:
      - 'v*'

jobs:
  release:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: 8.3

      - name: Install dependencies
        run: composer install --no-dev --optimize-autoloader

      - name: Run tests
        run: ./vendor/bin/pest

      - name: Create GitHub Release
        uses: actions/create-release@v1
        env:
          GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
        with:
          tag_name: ${{ github.ref }}
          release_name: Release ${{ github.ref }}
          draft: false
          prerelease: false
```

### Pre-release Versions

For beta/alpha releases:

```bash
# Create pre-release tag
git tag -a v2.0.0-beta.1 -m "Beta release for v2.0.0"
git push origin v2.0.0-beta.1
```

In `composer.json`:
```json
{
    "name": "abitbt/tabler-blade",
    "version": "2.0.0-beta.1"
}
```

Users install with:
```bash
composer require abitbt/tabler-blade:^2.0@beta
```

### Version Bumping Script

Create `bin/version-bump.sh`:

```bash
#!/bin/bash

# Usage: ./bin/version-bump.sh 1.3.0

VERSION=$1

if [ -z "$VERSION" ]; then
    echo "Usage: ./bin/version-bump.sh <version>"
    exit 1
fi

# Update composer.json
sed -i '' "s/\"version\": \".*\"/\"version\": \"$VERSION\"/" composer.json

# Update ServiceProvider
sed -i '' "s/'Version' => '.*'/'Version' => '$VERSION'/" src/TablerServiceProvider.php

# Update Version class (if exists)
sed -i '' "s/const VERSION = '.*'/const VERSION = '$VERSION'/" src/Version.php

echo "Version bumped to $VERSION"
echo "Don't forget to:"
echo "1. Update CHANGELOG.md"
echo "2. Run tests"
echo "3. Commit changes"
echo "4. Create git tag: git tag -a v$VERSION -m 'Release $VERSION'"
echo "5. Push: git push origin main && git push origin v$VERSION"
```

Make executable:
```bash
chmod +x bin/version-bump.sh
```

Usage:
```bash
./bin/version-bump.sh 1.3.0
```

## Best Practices Summary

1. **Follow Semantic Versioning** - MAJOR.MINOR.PATCH
2. **Maintain CHANGELOG.md** - Document all changes
3. **Deprecate before removing** - Give users time to migrate
4. **Test before release** - Run full test suite
5. **Support multiple Laravel versions** - Current + 2 previous
6. **Create migration guides** - Help users upgrade
7. **Use Git tags** - v1.2.3 format
8. **Automate where possible** - GitHub Actions for CI/CD
9. **Communicate clearly** - Release notes, upgrade guides
10. **Version everything** - composer.json, ServiceProvider, CHANGELOG.md
