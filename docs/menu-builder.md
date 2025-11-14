# Tabler Menu Builder

> Documentation for the TablerMenu fluent menu builder system

## Table of Contents

- [Overview](#overview)
- [Quick Start](#quick-start)
- [Fluent API](#fluent-api)
- [Config-Based Menus](#config-based-menus)
- [Menu Item Types](#menu-item-types)
- [Authorization](#authorization)
- [Active State Detection](#active-state-detection)
- [Advanced Usage](#advanced-usage)
- [Examples](#examples)

---

## Overview

The Tabler Menu Builder provides a powerful, fluent API for creating navigation menus with support for:

- **Fluent builder pattern** - Chain methods to build menus
- **Config-based menus** - Define menus in configuration files
- **Authorization** - Gate-based menu item visibility
- **Active state detection** - Automatic route-based highlighting
- **Nested dropdowns** - Multi-level menu support
- **Macroable** - Extend with custom functionality

---

## Quick Start

### Fluent API

```php
use function tabler_menu;

$menu = tabler_menu()
    ->link('Dashboard', route('dashboard'))
        ->icon('home')
        ->active('dashboard')
    ->link('Users', route('users.index'))
        ->icon('users')
        ->badge('12', 'danger')
    ->dropdown('Settings')
        ->icon('settings')
        ->link('Profile', route('profile'))
        ->link('Account', route('account'))
        ->divider()
        ->link('Logout', route('logout'))
    ->toArray();
```

### Config-Based

```php
// config/menus.php
return [
    'navbar' => [
        ['title' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'home'],
        ['title' => 'Users', 'route' => 'users.index', 'icon' => 'users'],
    ],
];

// In your view/controller
$menu = tabler_menu('navbar');
```

---

## Fluent API

### Creating a Menu

```php
use Abitbt\TablerBlade\TablerMenu\TablerMenu;

// Via helper function (recommended)
$menu = tabler_menu();

// Via class
$menu = TablerMenu::make();

// Via container
$menu = app('tabler.menu');
```

### Basic Menu Methods

#### `link(string $title, string $url)`

Add a link to the menu:

```php
$menu->link('Dashboard', route('dashboard'));
```

Returns a `MenuLink` instance with chainable methods:

```php
$menu->link('Dashboard', route('dashboard'))
    ->icon('home')                    // Add icon
    ->active('dashboard')             // Set active route pattern
    ->badge('5', 'danger')            // Add badge
    ->can('view-dashboard')           // Gate authorization
    ->attributes(['target' => '_blank']); // HTML attributes
```

#### `dropdown(string $title)`

Add a dropdown menu:

```php
$menu->dropdown('Settings')
    ->icon('settings')
    ->link('Profile', route('profile'))
    ->link('Account', route('account'));
```

Returns a `MenuDropdown` instance that can contain links, dividers, and headings.

#### `divider()`

Add a divider line:

```php
$menu->divider();
```

#### `heading(string $title)`

Add a section heading:

```php
$menu->heading('Administration');
```

### Conditional Methods

#### `when(bool $condition, Closure $callback)`

Add items conditionally:

```php
$menu->when(auth()->user()->isAdmin(), function ($menu) {
    $menu->link('Admin Panel', route('admin.dashboard'));
});
```

#### `unless(bool $condition, Closure $callback)`

Add items unless condition is true:

```php
$menu->unless(auth()->guest(), function ($menu) {
    $menu->link('Logout', route('logout'));
});
```

#### `group(string $heading, Closure $callback)`

Create a grouped section:

```php
$menu->group('User Management', function ($menu) {
    $menu->link('All Users', route('users.index'));
    $menu->link('Add User', route('users.create'));
    $menu->link('Roles', route('roles.index'));
});
```

### Getting Menu Data

#### `toArray()`

Get menu as array (visible items only):

```php
$menuArray = $menu->toArray();
```

#### `getItems()`

Get all menu items (including hidden):

```php
$allItems = $menu->getItems();
```

#### `getVisibleItems()`

Get visible items only:

```php
$visibleItems = $menu->getVisibleItems();
```

---

## Config-Based Menus

### Basic Configuration

Create `config/menus.php`:

```php
<?php

return [
    'navbar' => [
        [
            'type' => 'link',
            'title' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'home',
            'active' => 'dashboard',
        ],
        [
            'type' => 'link',
            'title' => 'Users',
            'route' => 'users.index',
            'icon' => 'users',
            'badge' => ['text' => '12', 'color' => 'danger'],
        ],
    ],

    'sidebar' => [
        [
            'type' => 'heading',
            'title' => 'Main Navigation',
        ],
        [
            'type' => 'link',
            'title' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'home',
        ],
        [
            'type' => 'dropdown',
            'title' => 'Settings',
            'icon' => 'settings',
            'items' => [
                ['title' => 'Profile', 'route' => 'profile'],
                ['title' => 'Account', 'route' => 'account'],
                ['type' => 'divider'],
                ['title' => 'Logout', 'route' => 'logout'],
            ],
        ],
    ],
];
```

### Loading Config Menus

```php
// Load by config key
$menu = tabler_menu('navbar');

// Returns processed array with:
// - Routes converted to URLs
// - Active states calculated
// - Authorized items only
```

### Using in Layouts

```blade
@extends('tabler::layouts.vertical', [
    'navItems' => tabler_menu('sidebar'),
])
```

---

## Menu Item Types

### Link

```php
// Fluent API
$menu->link('Dashboard', route('dashboard'))
    ->icon('home')
    ->active('dashboard')
    ->badge('New', 'success')
    ->can('view-dashboard');

// Config
[
    'type' => 'link',
    'title' => 'Dashboard',
    'url' => '/dashboard',           // Direct URL
    'route' => 'dashboard',          // Or route name (converted to URL)
    'icon' => 'home',
    'active' => 'dashboard',         // Route pattern for active state
    'badge' => ['text' => 'New', 'color' => 'success'],
    'can' => 'view-dashboard',       // Gate authorization
]
```

### Dropdown

```php
// Fluent API
$menu->dropdown('Settings')
    ->icon('settings')
    ->link('Profile', route('profile'))
    ->link('Account', route('account'))
    ->divider()
    ->link('Logout', route('logout'));

// Config
[
    'type' => 'dropdown',
    'title' => 'Settings',
    'icon' => 'settings',
    'items' => [
        ['title' => 'Profile', 'route' => 'profile'],
        ['title' => 'Account', 'route' => 'account'],
        ['type' => 'divider'],
        ['title' => 'Logout', 'route' => 'logout'],
    ],
]
```

### Heading

```php
// Fluent API
$menu->heading('Administration');

// Config
[
    'type' => 'heading',
    'title' => 'Administration',
]
```

### Divider

```php
// Fluent API
$menu->divider();

// Config
[
    'type' => 'divider',
]
```

---

## Authorization

### Gate-Based Authorization

**Using `can`:**

```php
// Fluent API
$menu->link('Admin Panel', route('admin'))
    ->can('access-admin');

// Config
[
    'title' => 'Admin Panel',
    'route' => 'admin',
    'can' => 'access-admin',  // Laravel Gate
]
```

**Using `canAny`:**

```php
// Config
[
    'title' => 'Management',
    'route' => 'management',
    'canAny' => ['manage-users', 'manage-posts'],  // Any of these gates
]
```

### Defining Gates

```php
// app/Providers/AppServiceProvider.php
use Illuminate\Support\Facades\Gate;

public function boot(): void
{
    Gate::define('access-admin', function ($user) {
        return $user->isAdmin();
    });

    Gate::define('manage-users', function ($user) {
        return $user->hasPermission('manage-users');
    });
}
```

### Authorization in Nested Items

Authorization applies recursively:

```php
[
    'type' => 'dropdown',
    'title' => 'Admin',
    'can' => 'access-admin',  // Dropdown hidden if user can't access
    'items' => [
        ['title' => 'Users', 'route' => 'admin.users', 'can' => 'manage-users'],
        ['title' => 'Settings', 'route' => 'admin.settings', 'can' => 'manage-settings'],
    ],
]
```

---

## Active State Detection

### Automatic Route-Based Detection

**Single route:**

```php
[
    'title' => 'Dashboard',
    'route' => 'dashboard',
    'active' => 'dashboard',  // Active when on 'dashboard' route
]
```

**Route pattern:**

```php
[
    'title' => 'Users',
    'route' => 'users.index',
    'active' => 'users.*',  // Active for any users.* route
]
```

**Multiple routes:**

```php
[
    'title' => 'Content',
    'route' => 'posts.index',
    'active' => ['posts.*', 'categories.*', 'tags.*'],
]
```

### Manual Active State

```php
[
    'title' => 'Special',
    'route' => 'special',
    'active' => true,  // Always active
]

[
    'title' => 'Hidden',
    'route' => 'hidden',
    'active' => false,  // Never active
]
```

### Dropdown Active State

Dropdowns are automatically active if any child is active:

```php
[
    'type' => 'dropdown',
    'title' => 'Settings',
    'items' => [
        ['title' => 'Profile', 'route' => 'profile', 'active' => 'profile'],
        ['title' => 'Account', 'route' => 'account', 'active' => 'account'],
    ],
    // Dropdown automatically active when on profile or account route
]
```

---

## Advanced Usage

### Extending with Macros

```php
// In a service provider
use Abitbt\TablerBlade\TablerMenu\TablerMenu;

TablerMenu::macro('adminLinks', function () {
    return $this
        ->heading('Administration')
        ->link('Users', route('admin.users'))->icon('users')
        ->link('Settings', route('admin.settings'))->icon('settings');
});

// Usage
$menu = tabler_menu()
    ->link('Dashboard', route('dashboard'))
    ->adminLinks();  // Custom macro
```

### Register Macros via Config

```php
// config/tabler.php
'menu' => [
    'macros' => [
        'userMenu' => function () {
            return $this
                ->link('Profile', route('profile'))
                ->link('Settings', route('settings'))
                ->divider()
                ->link('Logout', route('logout'));
        },
    ],
],
```

### Custom Menu Item Classes

Create custom menu item types:

```php
namespace App\Menu;

use Abitbt\TablerBlade\TablerMenu\MenuItem;

class CustomMenuItem extends MenuItem
{
    protected string $type = 'custom';

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'custom_data' => 'value',
            // ...
        ];
    }
}
```

---

## Examples

### Complete Navbar Menu

```php
// config/menus.php
return [
    'navbar' => [
        [
            'type' => 'link',
            'title' => 'Home',
            'route' => 'home',
            'icon' => 'home',
            'active' => 'home',
        ],
        [
            'type' => 'link',
            'title' => 'About',
            'route' => 'about',
            'active' => 'about',
        ],
        [
            'type' => 'link',
            'title' => 'Contact',
            'route' => 'contact',
            'active' => 'contact',
        ],
        [
            'type' => 'dropdown',
            'title' => 'Account',
            'icon' => 'user',
            'items' => [
                ['title' => 'Profile', 'route' => 'profile'],
                ['title' => 'Settings', 'route' => 'settings'],
                ['type' => 'divider'],
                ['title' => 'Logout', 'route' => 'logout'],
            ],
        ],
    ],
];
```

### Complete Admin Sidebar

```php
// config/menus.php
return [
    'admin-sidebar' => [
        [
            'type' => 'link',
            'title' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'dashboard',
            'active' => 'admin.dashboard',
        ],
        [
            'type' => 'heading',
            'title' => 'Content Management',
        ],
        [
            'type' => 'dropdown',
            'title' => 'Posts',
            'icon' => 'file-text',
            'can' => 'manage-posts',
            'items' => [
                [
                    'title' => 'All Posts',
                    'route' => 'admin.posts.index',
                    'active' => 'admin.posts.index',
                    'badge' => ['text' => '142', 'color' => 'info'],
                ],
                [
                    'title' => 'Add Post',
                    'route' => 'admin.posts.create',
                    'active' => 'admin.posts.create',
                ],
                [
                    'title' => 'Categories',
                    'route' => 'admin.categories.index',
                    'active' => 'admin.categories.*',
                ],
            ],
        ],
        [
            'type' => 'dropdown',
            'title' => 'Users',
            'icon' => 'users',
            'can' => 'manage-users',
            'items' => [
                ['title' => 'All Users', 'route' => 'admin.users.index'],
                ['title' => 'Add User', 'route' => 'admin.users.create'],
                ['type' => 'divider'],
                ['title' => 'Roles & Permissions', 'route' => 'admin.roles.index'],
            ],
        ],
        [
            'type' => 'heading',
            'title' => 'System',
        ],
        [
            'type' => 'link',
            'title' => 'Settings',
            'route' => 'admin.settings',
            'icon' => 'settings',
            'can' => 'manage-settings',
        ],
        [
            'type' => 'link',
            'title' => 'Logs',
            'route' => 'admin.logs',
            'icon' => 'file',
            'can' => 'view-logs',
        ],
    ],
];
```

### Fluent API with Conditions

```php
use function tabler_menu;

$menu = tabler_menu()
    ->link('Dashboard', route('dashboard'))->icon('home')

    ->when(auth()->user()->can('manage-posts'), function ($menu) {
        $menu->dropdown('Posts')
            ->icon('file-text')
            ->link('All Posts', route('posts.index'))
            ->link('Add Post', route('posts.create'))
            ->link('Categories', route('categories.index'));
    })

    ->when(auth()->user()->can('manage-users'), function ($menu) {
        $menu->dropdown('Users')
            ->icon('users')
            ->link('All Users', route('users.index'))
            ->link('Add User', route('users.create'))
            ->divider()
            ->link('Roles', route('roles.index'));
    })

    ->unless(auth()->guest(), function ($menu) {
        $menu->divider()
            ->link('Profile', route('profile'))->icon('user')
            ->link('Logout', route('logout'))->icon('logout');
    });

return $menu->toArray();
```

### Multi-Level Nested Dropdown

```php
[
    'type' => 'dropdown',
    'title' => 'E-Commerce',
    'icon' => 'shopping-cart',
    'items' => [
        [
            'type' => 'dropdown',
            'title' => 'Products',
            'items' => [
                ['title' => 'All Products', 'route' => 'products.index'],
                ['title' => 'Add Product', 'route' => 'products.create'],
                ['title' => 'Categories', 'route' => 'product-categories.index'],
            ],
        ],
        [
            'type' => 'dropdown',
            'title' => 'Orders',
            'items' => [
                ['title' => 'All Orders', 'route' => 'orders.index'],
                ['title' => 'Pending', 'route' => 'orders.pending'],
                ['title' => 'Completed', 'route' => 'orders.completed'],
            ],
        ],
        ['type' => 'divider'],
        ['title' => 'Customers', 'route' => 'customers.index'],
    ],
]
```

---

## Best Practices

1. **Use config for static menus** - Easier to maintain and version control
2. **Use fluent API for dynamic menus** - When menu structure depends on runtime data
3. **Leverage authorization** - Keep menu logic in Gates, not controllers
4. **Use route patterns for active state** - `users.*` instead of listing all routes
5. **Group related items** - Use headings and dividers for clarity
6. **Cache compiled menus** - For large menus with complex authorization
7. **Macros for reusable patterns** - DRY principle

---

## API Reference

### Helper Function

```php
tabler_menu(?string $config = null): TablerMenu|array
```

### TablerMenu Methods

| Method | Returns | Description |
|--------|---------|-------------|
| `make()` | `TablerMenu` | Create new instance |
| `fromConfig(string $key)` | `array` | Load from config |
| `link(string $title, string $url)` | `MenuLink` | Add link |
| `dropdown(string $title)` | `MenuDropdown` | Add dropdown |
| `divider()` | `TablerMenu` | Add divider |
| `heading(string $title)` | `TablerMenu` | Add heading |
| `when(bool $condition, Closure $callback)` | `TablerMenu` | Conditional add |
| `unless(bool $condition, Closure $callback)` | `TablerMenu` | Inverse conditional |
| `group(string $heading, Closure $callback)` | `TablerMenu` | Grouped section |
| `toArray()` | `array` | Get as array |
| `getItems()` | `array` | Get all items |
| `getVisibleItems()` | `array` | Get visible items |

### MenuLink Methods

| Method | Returns | Description |
|--------|---------|-------------|
| `icon(string $icon)` | `MenuLink` | Set icon |
| `active(string\|array\|bool $active)` | `MenuLink` | Set active pattern |
| `badge(string $text, string $color)` | `MenuLink` | Add badge |
| `can(string $gate)` | `MenuLink` | Gate authorization |
| `attributes(array $attributes)` | `MenuLink` | HTML attributes |

### Config Item Structure

```php
[
    'type' => 'link|dropdown|heading|divider',
    'title' => 'Menu Title',
    'url' => '/path',              // Direct URL
    'route' => 'route.name',       // Or route name
    'icon' => 'icon-name',
    'active' => 'route.pattern',   // Route pattern or bool
    'badge' => ['text' => '5', 'color' => 'danger'],
    'can' => 'gate-name',          // Single gate
    'canAny' => ['gate1', 'gate2'], // Any of these gates
    'items' => [],                 // For dropdowns
]
```

---

For layout documentation, see `docs/layout-templates.md`.
