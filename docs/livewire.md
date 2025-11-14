# Livewire Compatibility Guide

> How to use Tabler-Blade components with Laravel Livewire - practical patterns, best practices, and troubleshooting

**Status:** Production Ready  
**Last Updated:** 2025-01-14

---

## Table of Contents

- [Introduction](#introduction)
- [Core Principles](#core-principles)
- [Quick Start](#quick-start)
- [Attribute Pass-Through](#attribute-pass-through)
- [Using Components with Livewire](#using-components-with-livewire)
- [Form Components](#form-components)
- [Interactive Components](#interactive-components)
- [Bootstrap JS + Livewire](#bootstrap-js--livewire)
- [Alpine.js Integration](#alpinejs-integration)
- [Common Patterns](#common-patterns)
- [Troubleshooting](#troubleshooting)
- [Testing](#testing)
- [Examples Gallery](#examples-gallery)

---

## Introduction

### What is Livewire Compatibility?

Tabler-Blade components are **fully compatible with Laravel Livewire** while remaining **completely functional without it**. This means:

- ✅ Components work standalone (no Livewire required)
- ✅ Components work WITH Livewire when installed
- ✅ All `wire:*` attributes pass through transparently
- ✅ No Livewire-specific dependencies in component code
- ✅ No special configuration needed

### Why It Matters

**Wider Adoption:** Users can choose whether to use Livewire based on their project needs, not library limitations.

**User Choice:** Components don't force architectural decisions - they adapt to your stack.

**Future-Proof:** Components remain functional regardless of Livewire version or installation status.

### Key Philosophy

> **Components are Livewire-compatible, not Livewire-exclusive.**

This means our components are designed to enhance Livewire applications while never requiring Livewire to function.

---

## Core Principles

### 1. Attribute Bags Don't Filter

All Tabler-Blade components use `{{ $attributes }}` or `{{ $attributes->merge(...) }}` to pass through ALL attributes, including `wire:*` directives:

```blade
{{-- Component: button.blade.php --}}
<button {{ $attributes->merge(['class' => 'btn btn-' . $color]) }}>
    {{ $slot }}
</button>
```

**Result:** Any `wire:*` attribute you add is automatically passed to the rendered element.

### 2. Components Work Standalone

No component requires Livewire to render:

```blade
{{-- Works without Livewire installed --}}
<x-tabler::button color="primary">Click Me</x-tabler::button>

{{-- Also works with Livewire installed --}}
<x-tabler::button wire:click="save" color="primary">Save</x-tabler::button>
```

### 3. No Livewire-Specific Code

Components never call Livewire methods directly or check if Livewire is installed. They're pure Blade components that happen to work seamlessly with Livewire.

---

## Quick Start

### Installation

Livewire is **optional**. Install only if you want reactive components:

```bash
composer require livewire/livewire
```

### Basic Usage

Once Livewire is installed, simply add `wire:*` attributes to any component:

```blade
{{-- In your Livewire component view --}}
<div>
    <x-tabler::button wire:click="save" color="success">
        Save Changes
    </x-tabler::button>

    <x-tabler::forms.input 
        wire:model="name" 
        label="Name" 
        placeholder="Enter your name"
    />
</div>
```

That's it! No special configuration or setup required.

---

## Attribute Pass-Through

### How It Works

All components use Laravel's attribute bag system, which automatically passes through any attribute not explicitly declared in `@props`:

```blade
{{-- Component definition --}}
@props(['color' => 'primary', 'size' => 'md'])

<button {{ $attributes->merge(['class' => "btn btn-{$color} btn-{$size}"]) }}>
    {{ $slot }}
</button>
```

```blade
{{-- Usage --}}
<x-tabler::button 
    color="success"
    wire:click="handleAction"
    wire:loading.attr="disabled"
    data-action="submit"
>
    Submit Form
</x-tabler::button>
```

**Rendered Output:**

```html
<button 
    class="btn btn-success btn-md" 
    wire:click="handleAction"
    wire:loading.attr="disabled"
    data-action="submit"
>
    Submit Form
</button>
```

### What Gets Passed Through

**All of these work automatically:**

- `wire:click`, `wire:submit`, `wire:change`
- `wire:model`, `wire:model.defer`, `wire:model.lazy`
- `wire:loading`, `wire:target`, `wire:dirty`
- `wire:poll`, `wire:poll.5s`
- `wire:key`
- `wire:ignore`, `wire:ignore.self`
- `wire:transition`
- Any custom `data-*` attributes
- Any standard HTML attributes

### Components That Support Pass-Through

**All of them!** Every Tabler-Blade component supports attribute pass-through:

- ✅ Buttons
- ✅ Form inputs (text, select, textarea, checkbox, radio)
- ✅ Cards
- ✅ Alerts
- ✅ Modals
- ✅ Badges
- ✅ Tables
- ✅ Everything else

---

## Using Components with Livewire

### wire:click Handlers

Add click handlers to any interactive component:

```blade
{{-- Button with wire:click --}}
<x-tabler::button wire:click="save" color="primary">
    Save
</x-tabler::button>

{{-- Button with method parameters --}}
<x-tabler::button wire:click="delete({{ $item->id }})" color="danger">
    Delete
</x-tabler::button>

{{-- Button with confirmation --}}
<x-tabler::button 
    wire:click="archive" 
    wire:confirm="Are you sure?"
    color="warning"
>
    Archive
</x-tabler::button>
```

### wire:model on Forms

Bind form components to Livewire properties:

**Text Input:**

```blade
<x-tabler::forms.input 
    wire:model="email"
    type="email"
    label="Email Address"
    placeholder="you@example.com"
/>
```

**Select Dropdown:**

```blade
<x-tabler::forms.select 
    wire:model="country"
    label="Country"
    :options="$countries"
/>
```

**Textarea:**

```blade
<x-tabler::forms.textarea 
    wire:model="description"
    label="Description"
    rows="5"
/>
```

**Checkbox:**

```blade
<x-tabler::forms.checkbox 
    wire:model="terms"
    label="I agree to the terms and conditions"
/>
```

### wire:key in Loops (CRITICAL)

**Always use `wire:key` when rendering components in loops** to prevent Livewire rendering issues:

```blade
@foreach($items as $item)
    <x-tabler::cards.card wire:key="item-{{ $item->id }}">
        <x-tabler::cards.body>
            <h3>{{ $item->title }}</h3>
            <p>{{ $item->description }}</p>
            <x-tabler::button 
                wire:click="edit({{ $item->id }})"
                size="sm"
            >
                Edit
            </x-tabler::button>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
@endforeach
```

**Why?** Without `wire:key`, Livewire may confuse which element to update, causing visual glitches or incorrect data binding.

### wire:loading States

Show loading indicators during Livewire requests:

**Basic Loading State:**

```blade
<x-tabler::button wire:click="save" color="primary">
    <span wire:loading.remove>Save Changes</span>
    <span wire:loading>
        <x-tabler::spinner class="spinner-border-sm me-2" />
        Saving...
    </span>
</x-tabler::button>
```

**Disable During Loading:**

```blade
<x-tabler::button 
    wire:click="process"
    wire:loading.attr="disabled"
    color="success"
>
    Process Order
</x-tabler::button>
```

**Target Specific Actions:**

```blade
<div>
    <x-tabler::button wire:click="save" wire:target="save">
        <span wire:loading.remove wire:target="save">Save</span>
        <span wire:loading wire:target="save">Saving...</span>
    </x-tabler::button>

    <x-tabler::button wire:click="cancel" color="secondary">
        Cancel
    </x-tabler::button>
</div>
```

### wire:poll

Auto-refresh component data:

```blade
{{-- Refresh every 5 seconds --}}
<x-tabler::cards.card wire:poll.5s>
    <x-tabler::cards.header>
        <x-slot:title>Live Statistics</x-slot>
    </x-tabler::cards.header>
    <x-tabler::cards.body>
        <div>Active Users: {{ $activeUsers }}</div>
        <div>Last Updated: {{ now()->format('h:i:s A') }}</div>
    </x-tabler::cards.body>
</x-tabler::cards.card>
```

**Conditional Polling:**

```blade
<div wire:poll.visible>
    {{-- Only polls when visible in viewport --}}
</div>

<div wire:poll.keep-alive>
    {{-- Keeps connection alive without full refresh --}}
</div>
```

### wire:transition

Add smooth transitions when Livewire updates content:

```blade
<x-tabler::alert 
    type="success" 
    wire:transition
    class="{{ $showAlert ? '' : 'd-none' }}"
>
    Changes saved successfully!
</x-tabler::alert>
```

---

## Form Components

### wire:model Binding

All form components support `wire:model` with various modifiers:

**Real-Time Binding:**

```blade
<x-tabler::forms.input 
    wire:model.live="search"
    placeholder="Search..."
/>
```

**Debounced Binding:**

```blade
<x-tabler::forms.input 
    wire:model.live.debounce.500ms="search"
    placeholder="Search (debounced)..."
/>
```

**Deferred Binding (on form submit):**

```blade
<form wire:submit.prevent="save">
    <x-tabler::forms.input 
        wire:model="title"
        label="Title"
    />
    
    <x-tabler::forms.textarea 
        wire:model="content"
        label="Content"
    />
    
    <x-tabler::button type="submit">
        Save Post
    </x-tabler::button>
</form>
```

### Validation with Livewire

Display validation errors automatically:

```blade
{{-- In Livewire component --}}
<form wire:submit.prevent="save">
    <x-tabler::forms.input 
        wire:model="email"
        name="email"
        label="Email"
        :error="$errors->first('email')"
    />
    
    <x-tabler::forms.input 
        wire:model="password"
        type="password"
        name="password"
        label="Password"
        :error="$errors->first('password')"
    />
    
    <x-tabler::button type="submit">
        Register
    </x-tabler::button>
</form>
```

**Livewire Component:**

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public string $email = '';
    public string $password = '';
    
    public function save()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        // Save logic...
        
        session()->flash('success', 'Registration successful!');
    }
    
    public function render()
    {
        return view('livewire.register-form');
    }
}
```

### Real-Time Validation

Validate as the user types:

```blade
<x-tabler::forms.input 
    wire:model.live="username"
    wire:change="validateUsername"
    label="Username"
    :error="$errors->first('username')"
/>

@if($usernameAvailable && !$errors->has('username'))
    <x-tabler::forms.valid-feedback>
        Username is available!
    </x-tabler::forms.valid-feedback>
@endif
```

### Custom Validation Messages

```blade
<x-tabler::forms.input 
    wire:model="phone"
    label="Phone Number"
    help="Format: (555) 555-5555"
    :error="$errors->first('phone')"
/>
```

---

## Interactive Components

### Modals with Livewire

**Pattern 1: Livewire-Controlled Modal State**

```blade
{{-- Livewire Component View --}}
<div>
    <x-tabler::button wire:click="$set('showModal', true)">
        Open Modal
    </x-tabler::button>

    @if($showModal)
        <x-tabler::modals.modal id="editModal">
            <x-tabler::modals.header>
                <h5>Edit Item</h5>
            </x-tabler::modals.header>
            
            <x-tabler::modals.body>
                <x-tabler::forms.input 
                    wire:model="itemName"
                    label="Name"
                />
            </x-tabler::modals.body>
            
            <x-tabler::modals.footer>
                <x-tabler::button 
                    wire:click="save"
                    color="primary"
                >
                    Save
                </x-tabler::button>
                <x-tabler::button 
                    wire:click="$set('showModal', false)"
                    color="secondary"
                >
                    Cancel
                </x-tabler::button>
            </x-tabler::modals.footer>
        </x-tabler::modals.modal>
    @endif
</div>
```

**Pattern 2: Bootstrap + Livewire (Hybrid)**

```blade
{{-- Trigger button --}}
<x-tabler::button 
    data-bs-toggle="modal" 
    data-bs-target="#itemModal"
    wire:click="loadItem({{ $id }})"
>
    View Details
</x-tabler::button>

{{-- Modal with wire:ignore.self --}}
<x-tabler::modals.modal id="itemModal" wire:ignore.self>
    <x-tabler::modals.header>
        <h5>Item Details</h5>
    </x-tabler::modals.header>
    
    <x-tabler::modals.body>
        @if($item)
            <p><strong>Name:</strong> {{ $item->name }}</p>
            <p><strong>Description:</strong> {{ $item->description }}</p>
        @else
            <x-tabler::spinner />
        @endif
    </x-tabler::modals.body>
</x-tabler::modals.modal>
```

### Dropdowns with Livewire

```blade
<x-tabler::dropdown>
    <x-tabler::button 
        data-bs-toggle="dropdown"
        color="secondary"
    >
        Actions <x-tabler-chevron-down class="icon" />
    </x-tabler::button>
    
    <x-tabler::dropdown.menu>
        <x-tabler::dropdown.item wire:click="edit">
            Edit
        </x-tabler::dropdown.item>
        <x-tabler::dropdown.item wire:click="duplicate">
            Duplicate
        </x-tabler::dropdown.item>
        <x-tabler::dropdown.divider />
        <x-tabler::dropdown.item 
            wire:click="delete"
            wire:confirm="Are you sure?"
            class="text-danger"
        >
            Delete
        </x-tabler::dropdown.item>
    </x-tabler::dropdown.menu>
</x-tabler::dropdown>
```

### Tabs with Livewire

**Pattern: Livewire-Controlled Active Tab**

```blade
<x-tabler::tabs>
    <x-tabler::tabs.nav>
        <x-tabler::tabs.nav-item 
            wire:click="$set('activeTab', 'profile')"
            :active="$activeTab === 'profile'"
        >
            Profile
        </x-tabler::tabs.nav-item>
        <x-tabler::tabs.nav-item 
            wire:click="$set('activeTab', 'settings')"
            :active="$activeTab === 'settings'"
        >
            Settings
        </x-tabler::tabs.nav-item>
    </x-tabler::tabs.nav>
    
    <x-tabler::tabs.content>
        @if($activeTab === 'profile')
            <div wire:key="tab-profile">
                {{-- Profile tab content --}}
            </div>
        @elseif($activeTab === 'settings')
            <div wire:key="tab-settings">
                {{-- Settings tab content --}}
            </div>
        @endif
    </x-tabler::tabs.content>
</x-tabler::tabs>
```

---

## Bootstrap JS + Livewire

### How They Coexist

Tabler UI is built on Bootstrap 5, which provides JavaScript for modals, dropdowns, tooltips, etc. These work alongside Livewire with proper handling.

### Key Concept: wire:ignore

Use `wire:ignore` or `wire:ignore.self` to prevent Livewire from interfering with Bootstrap's JavaScript-managed elements:

**wire:ignore:** Ignores element and all children  
**wire:ignore.self:** Ignores only the element itself, not children

### Modal Example

```blade
{{-- Modal with Bootstrap JS + Livewire data --}}
<x-tabler::modals.modal id="userModal" wire:ignore.self>
    <x-tabler::modals.header>
        <h5>User: {{ $user->name }}</h5>
    </x-tabler::modals.header>
    
    <x-tabler::modals.body>
        {{-- Livewire can update this content --}}
        <p>Email: {{ $user->email }}</p>
        
        <x-tabler::forms.input 
            wire:model="user.name"
            label="Name"
        />
    </x-tabler::modals.body>
    
    <x-tabler::modals.footer>
        <x-tabler::button wire:click="save" color="primary">
            Save
        </x-tabler::button>
    </x-tabler::modals.footer>
</x-tabler::modals.modal>
```

### Dropdown Example

```blade
<div wire:ignore>
    <x-tabler::dropdown>
        <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
            Filter
        </button>
        
        <x-tabler::dropdown.menu>
            <x-tabler::dropdown.item wire:click="filterBy('all')">
                All Items
            </x-tabler::dropdown.item>
            <x-tabler::dropdown.item wire:click="filterBy('active')">
                Active Only
            </x-tabler::dropdown.item>
        </x-tabler::dropdown.menu>
    </x-tabler::dropdown>
</div>
```

### Tooltip/Popover with Livewire

Bootstrap tooltips need to be reinitialized after Livewire updates:

```blade
<div wire:key="tooltip-{{ $item->id }}">
    <x-tabler::button 
        data-bs-toggle="tooltip" 
        data-bs-title="{{ $item->description }}"
        x-init="new bootstrap.Tooltip($el)"
    >
        {{ $item->name }}
    </x-tabler::button>
</div>
```

**Or use Alpine.js + Livewire hooks:**

```blade
<div 
    x-data 
    x-init="$watch('$wire.items', () => {
        // Reinitialize tooltips after Livewire updates
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=\'tooltip\']');
        [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
    })"
>
    @foreach($items as $item)
        <x-tabler::button 
            wire:key="item-{{ $item->id }}"
            data-bs-toggle="tooltip"
            data-bs-title="{{ $item->tooltip }}"
        >
            {{ $item->name }}
        </x-tabler::button>
    @endforeach
</div>
```

---

## Alpine.js Integration

### Livewire 3 Bundles Alpine

Livewire 3.x includes Alpine.js by default, so you can use Alpine directives alongside `wire:*` attributes:

```blade
<x-tabler::button 
    x-data="{ loading: false }"
    @click="loading = true; $wire.save().then(() => loading = false)"
    ::disabled="loading"
    color="primary"
>
    <span x-show="!loading">Save</span>
    <span x-show="loading">
        <x-tabler::spinner class="spinner-border-sm" />
        Saving...
    </span>
</x-tabler::button>
```

### Combining Alpine + Livewire

**Use Alpine for UI state, Livewire for data:**

```blade
<div x-data="{ expanded: false }">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>{{ $post->title }}</x-slot>
            <x-slot:actions>
                <x-tabler::button 
                    @click="expanded = !expanded"
                    size="sm"
                >
                    <span x-text="expanded ? 'Collapse' : 'Expand'"></span>
                </x-tabler::button>
            </x-slot>
        </x-tabler::cards.header>
        
        <x-tabler::cards.body x-show="expanded" x-collapse>
            <p>{{ $post->content }}</p>
            
            <x-tabler::button 
                wire:click="like"
                size="sm"
                color="success"
            >
                <x-tabler-heart class="icon" />
                Like ({{ $post->likes_count }})
            </x-tabler::button>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

### Alpine Magic: $wire

Access Livewire component from Alpine:

```blade
<div x-data>
    <x-tabler::forms.input 
        x-model="search"
        @input.debounce.500ms="$wire.search = search"
        placeholder="Search..."
    />
    
    <div wire:loading wire:target="search">
        <x-tabler::spinner class="spinner-border-sm" />
    </div>
</div>
```

---

## Common Patterns

### Pattern 1: Search with Debounce

```blade
{{-- Livewire Component View --}}
<div>
    <x-tabler::forms.input 
        wire:model.live.debounce.300ms="search"
        placeholder="Search users..."
        icon="search"
    />
    
    <div wire:loading wire:target="search">
        <x-tabler::spinner class="my-3" />
    </div>
    
    <div class="row row-cards mt-3">
        @forelse($users as $user)
            <div class="col-md-4" wire:key="user-{{ $user->id }}">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <h4>{{ $user->name }}</h4>
                        <p class="text-secondary">{{ $user->email }}</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>
        @empty
            <div class="col-12">
                <x-tabler::empty 
                    title="No users found"
                    subtitle="Try a different search term"
                />
            </div>
        @endforelse
    </div>
</div>
```

### Pattern 2: Inline Editing

```blade
<div>
    @if($editing)
        <form wire:submit.prevent="save">
            <x-tabler::forms.input 
                wire:model="title"
                autofocus
            />
            <div class="btn-list mt-2">
                <x-tabler::button type="submit" size="sm" color="success">
                    Save
                </x-tabler::button>
                <x-tabler::button 
                    wire:click="$set('editing', false)"
                    type="button"
                    size="sm"
                    color="secondary"
                >
                    Cancel
                </x-tabler::button>
            </div>
        </form>
    @else
        <div class="d-flex justify-content-between align-items-center">
            <h3>{{ $title }}</h3>
            <x-tabler::button 
                wire:click="$set('editing', true)"
                size="sm"
                variant="ghost"
            >
                <x-tabler-edit class="icon" />
            </x-tabler::button>
        </div>
    @endif
</div>
```

### Pattern 3: Bulk Actions

```blade
<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            @if(count($selected) > 0)
                <x-tabler::badge color="primary">
                    {{ count($selected) }} selected
                </x-tabler::badge>
                
                <x-tabler::button 
                    wire:click="deleteSelected"
                    wire:confirm="Delete {{ count($selected) }} items?"
                    size="sm"
                    color="danger"
                    class="ms-2"
                >
                    Delete Selected
                </x-tabler::button>
            @endif
        </div>
        
        <x-tabler::button wire:click="selectAll" size="sm">
            Select All
        </x-tabler::button>
    </div>
    
    <div class="row row-cards">
        @foreach($items as $item)
            <div class="col-md-4" wire:key="item-{{ $item->id }}">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::forms.checkbox 
                            wire:model.live="selected"
                            :value="$item->id"
                            :label="$item->name"
                        />
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>
        @endforeach
    </div>
</div>
```

### Pattern 4: Pagination

```blade
<div>
    <div class="row row-cards">
        @foreach($items as $item)
            <div class="col-md-6" wire:key="item-{{ $item->id }}">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>
        @endforeach
    </div>
    
    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>
```

**Livewire Component:**

```php
use Livewire\WithPagination;

class ItemList extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.item-list', [
            'items' => Item::paginate(10),
        ]);
    }
}
```

### Pattern 5: File Upload with Progress

```blade
<div>
    <x-tabler::forms.file-input 
        wire:model="photo"
        label="Profile Photo"
    />
    
    @if($photo)
        <div class="mt-3">
            <x-tabler::progress value="{{ $uploadProgress }}" />
            <p class="text-secondary mt-1">Uploading: {{ $uploadProgress }}%</p>
        </div>
    @endif
    
    <div wire:loading wire:target="photo" class="mt-2">
        <x-tabler::alert type="info">
            <x-tabler-upload class="icon alert-icon" />
            Uploading photo...
        </x-tabler::alert>
    </div>
    
    @error('photo')
        <x-tabler::alert type="danger" class="mt-2">
            {{ $message }}
        </x-tabler::alert>
    @enderror
</div>
```

---

## Troubleshooting

### Issue 1: Components Not Updating

**Symptom:** Livewire updates but component UI doesn't change.

**Solution:** Add `wire:key` to components in loops:

```blade
@foreach($items as $item)
    <x-tabler::cards.card wire:key="card-{{ $item->id }}">
        {{-- Card content --}}
    </x-tabler::cards.card>
@endforeach
```

### Issue 2: Modal Closing After Livewire Update

**Symptom:** Bootstrap modal closes when Livewire updates the component.

**Solution:** Use `wire:ignore.self` on the modal:

```blade
<x-tabler::modals.modal id="myModal" wire:ignore.self>
    {{-- Modal content --}}
</x-tabler::modals.modal>
```

### Issue 3: Dropdown Stops Working

**Symptom:** Bootstrap dropdown stops working after Livewire update.

**Solution:** Wrap dropdown in `wire:ignore`:

```blade
<div wire:ignore>
    <x-tabler::dropdown>
        {{-- Dropdown content --}}
    </x-tabler::dropdown>
</div>
```

**Or reinitialize Bootstrap after Livewire updates:**

```blade
<div x-data x-init="$wire.on('updated', () => {
    // Reinitialize dropdowns
    document.querySelectorAll('[data-bs-toggle=\'dropdown\']').forEach(el => {
        new bootstrap.Dropdown(el);
    });
})">
    {{-- Component content --}}
</div>
```

### Issue 4: wire:model Not Binding

**Symptom:** Input value doesn't sync with Livewire property.

**Solutions:**

1. **Check property visibility:**

```php
// Livewire Component
public string $email = ''; // Must be public
```

2. **Check name attribute matches:**

```blade
{{-- Property name must match --}}
<x-tabler::forms.input wire:model="email" name="email" />
```

3. **Use correct modifier:**

```blade
{{-- Real-time: wire:model.live --}}
<x-tabler::forms.input wire:model.live="search" />

{{-- On blur: wire:model.blur --}}
<x-tabler::forms.input wire:model.blur="email" />

{{-- On submit: wire:model (default) --}}
<x-tabler::forms.input wire:model="email" />
```

### Issue 5: Tooltip/Popover Disappears

**Symptom:** Bootstrap tooltips stop working after Livewire updates.

**Solution:** Use Alpine to reinitialize tooltips:

```blade
<div 
    x-data 
    x-init="
        $nextTick(() => {
            document.querySelectorAll('[data-bs-toggle=\'tooltip\']').forEach(el => {
                new bootstrap.Tooltip(el);
            });
        });
        
        $wire.on('updated', () => {
            document.querySelectorAll('[data-bs-toggle=\'tooltip\']').forEach(el => {
                new bootstrap.Tooltip(el);
            });
        });
    "
>
    {{-- Component with tooltips --}}
</div>
```

### Issue 6: Custom Attributes Not Passing Through

**Symptom:** Custom `data-*` or `wire:*` attributes not appearing on rendered element.

**Solution:** Ensure component uses `{{ $attributes }}` or `{{ $attributes->merge(...) }}`:

```blade
{{-- Component must include $attributes --}}
<button {{ $attributes->merge(['class' => 'btn']) }}>
    {{ $slot }}
</button>
```

---

## Testing

### Testing Livewire + Components

Use Pest's Livewire testing features:

```php
<?php

use App\Livewire\UserForm;
use function Pest\Laravel\{assertDatabaseHas};
use function Pest\Livewire\{livewire};

it('saves user data via Livewire form', function () {
    livewire(UserForm::class)
        ->set('name', 'John Doe')
        ->set('email', 'john@example.com')
        ->call('save')
        ->assertHasNoErrors()
        ->assertDispatched('user-saved');
    
    assertDatabaseHas('users', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ]);
});

it('validates required fields', function () {
    livewire(UserForm::class)
        ->set('email', 'invalid-email')
        ->call('save')
        ->assertHasErrors(['email' => 'email']);
});

it('updates search results in real-time', function () {
    livewire(UserSearch::class)
        ->set('search', 'john')
        ->assertSee('John Doe')
        ->assertDontSee('Jane Smith');
});
```

### Browser Testing with Pest v4

Test components with Livewire in a real browser:

```php
<?php

it('interacts with Livewire button correctly', function () {
    $user = User::factory()->create();
    
    $this->actingAs($user);
    
    $page = visit('/dashboard');
    
    $page->click('button:contains("Load More")')
        ->waitFor('.card') // Wait for Livewire to load
        ->assertSee('New Card Content')
        ->assertNoJavascriptErrors();
});

it('validates form with Livewire', function () {
    visit('/register')
        ->type('email', 'invalid-email')
        ->click('button[type="submit"]')
        ->waitFor('.invalid-feedback') // Wait for Livewire validation
        ->assertSee('The email field must be a valid email address');
});
```

### Testing wire:model Binding

```php
it('binds input to Livewire property', function () {
    livewire(SearchComponent::class)
        ->assertSet('query', '') // Initial state
        ->set('query', 'laravel') // Set via wire:model
        ->assertSet('query', 'laravel') // Verify binding
        ->assertSee('Laravel'); // Should show results
});
```

### Testing wire:click Actions

```php
it('triggers action on button click', function () {
    livewire(PostComponent::class)
        ->call('like') // Simulates wire:click="like"
        ->assertSet('liked', true)
        ->assertSee('Liked');
});

it('passes parameters to action', function () {
    livewire(ItemList::class)
        ->call('delete', 123) // Simulates wire:click="delete(123)"
        ->assertDispatched('item-deleted', id: 123);
});
```

---

## Examples Gallery

### Example 1: Complete CRUD Form

```blade
{{-- Livewire Component: app/Livewire/PostEditor.php --}}
<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-8">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-slot:title>
                            {{ $postId ? 'Edit Post' : 'Create Post' }}
                        </x-slot>
                    </x-tabler::cards.header>
                    
                    <x-tabler::cards.body>
                        <x-tabler::forms.input 
                            wire:model="title"
                            label="Title"
                            placeholder="Enter post title"
                            :error="$errors->first('title')"
                            required
                        />
                        
                        <x-tabler::forms.textarea 
                            wire:model="content"
                            label="Content"
                            rows="10"
                            :error="$errors->first('content')"
                            required
                        />
                        
                        <x-tabler::forms.select 
                            wire:model="category_id"
                            label="Category"
                            :options="$categories"
                            :error="$errors->first('category_id')"
                        />
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>
            
            <div class="col-md-4">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-slot:title>Publish Settings</x-slot>
                    </x-tabler::cards.header>
                    
                    <x-tabler::cards.body>
                        <x-tabler::forms.select 
                            wire:model="status"
                            label="Status"
                            :options="['draft' => 'Draft', 'published' => 'Published']"
                        />
                        
                        <x-tabler::forms.checkbox 
                            wire:model="featured"
                            label="Feature this post"
                        />
                        
                        <div class="btn-list mt-3">
                            <x-tabler::button 
                                type="submit"
                                color="primary"
                                wire:loading.attr="disabled"
                            >
                                <span wire:loading.remove wire:target="save">
                                    {{ $postId ? 'Update' : 'Publish' }}
                                </span>
                                <span wire:loading wire:target="save">
                                    <x-tabler::spinner class="spinner-border-sm me-2" />
                                    Saving...
                                </span>
                            </x-tabler::button>
                            
                            <x-tabler::button 
                                wire:click="cancel"
                                type="button"
                                color="secondary"
                            >
                                Cancel
                            </x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>
        </div>
    </form>
</div>
```

### Example 2: Data Table with Filtering

```blade
{{-- Livewire Component: app/Livewire/UserTable.php --}}
<div>
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Users</x-slot>
            <x-slot:actions>
                <x-tabler::forms.input 
                    wire:model.live.debounce.300ms="search"
                    placeholder="Search users..."
                    size="sm"
                />
            </x-slot>
        </x-tabler::cards.header>
        
        <x-tabler::cards.body class="p-0">
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr wire:key="user-{{ $user->id }}">
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <x-tabler::badge 
                                        :color="$user->active ? 'success' : 'secondary'"
                                    >
                                        {{ $user->active ? 'Active' : 'Inactive' }}
                                    </x-tabler::badge>
                                </td>
                                <td>
                                    <div class="btn-list">
                                        <x-tabler::button 
                                            wire:click="edit({{ $user->id }})"
                                            size="sm"
                                            variant="ghost"
                                        >
                                            Edit
                                        </x-tabler::button>
                                        <x-tabler::button 
                                            wire:click="delete({{ $user->id }})"
                                            wire:confirm="Delete {{ $user->name }}?"
                                            size="sm"
                                            variant="ghost"
                                            color="danger"
                                        >
                                            Delete
                                        </x-tabler::button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <x-tabler::empty 
                                        title="No users found"
                                        subtitle="Try adjusting your search"
                                    />
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-tabler::cards.body>
        
        <x-tabler::cards.footer>
            {{ $users->links() }}
        </x-tabler::cards.footer>
    </x-tabler::cards.card>
</div>
```

### Example 3: Real-Time Notifications

```blade
{{-- Livewire Component: app/Livewire/NotificationCenter.php --}}
<div wire:poll.5s>
    @foreach($notifications as $notification)
        <x-tabler::alert 
            wire:key="notification-{{ $notification->id }}"
            :type="$notification->type"
            dismissible
            wire:click="markAsRead({{ $notification->id }})"
        >
            <div class="d-flex">
                <div class="flex-grow-1">
                    <h4 class="alert-title">{{ $notification->title }}</h4>
                    <div class="text-secondary">{{ $notification->message }}</div>
                    <div class="text-secondary mt-1">
                        <small>{{ $notification->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        </x-tabler::alert>
    @endforeach
    
    @if($notifications->isEmpty())
        <x-tabler::empty 
            title="No notifications"
            subtitle="You're all caught up!"
            icon="bell-off"
        />
    @endif
</div>
```

### Example 4: Kanban Board

```blade
{{-- Livewire Component: app/Livewire/KanbanBoard.php --}}
<div class="row row-cards">
    @foreach($columns as $column)
        <div class="col-md-4" wire:key="column-{{ $column->id }}">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>{{ $column->name }}</x-slot>
                    <x-slot:subtitle>{{ $column->tasks->count() }} tasks</x-slot>
                </x-tabler::cards.header>
                
                <x-tabler::cards.body>
                    @foreach($column->tasks as $task)
                        <x-tabler::cards.card 
                            wire:key="task-{{ $task->id }}"
                            class="mb-2"
                        >
                            <x-tabler::cards.body>
                                <h5>{{ $task->title }}</h5>
                                <p class="text-secondary mb-2">{{ $task->description }}</p>
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <x-tabler::badge color="primary">
                                        {{ $task->priority }}
                                    </x-tabler::badge>
                                    
                                    <div class="btn-list">
                                        @if($column->id > 1)
                                            <x-tabler::button 
                                                wire:click="moveTask({{ $task->id }}, 'left')"
                                                size="sm"
                                                variant="ghost"
                                            >
                                                ←
                                            </x-tabler::button>
                                        @endif
                                        
                                        @if($column->id < count($columns))
                                            <x-tabler::button 
                                                wire:click="moveTask({{ $task->id }}, 'right')"
                                                size="sm"
                                                variant="ghost"
                                            >
                                                →
                                            </x-tabler::button>
                                        @endif
                                    </div>
                                </div>
                            </x-tabler::cards.body>
                        </x-tabler::cards.card>
                    @endforeach
                    
                    <x-tabler::button 
                        wire:click="addTask({{ $column->id }})"
                        variant="outline"
                        color="primary"
                        full-width
                    >
                        + Add Task
                    </x-tabler::button>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    @endforeach
</div>
```

---

## Summary

### Key Takeaways

1. **Components work standalone** - No Livewire required
2. **All attributes pass through** - `wire:*` directives work automatically
3. **Use `wire:key` in loops** - Critical for proper updates
4. **Combine with Bootstrap JS** - Use `wire:ignore` when needed
5. **Alpine.js enhances UX** - Great for client-side UI state
6. **Test thoroughly** - Use Pest's Livewire and browser testing

### Best Practices

- ✅ Always use `wire:key` for components in loops
- ✅ Use `wire:loading` for better UX during requests
- ✅ Debounce search inputs with `.live.debounce.Xms`
- ✅ Use `wire:ignore.self` for Bootstrap modals
- ✅ Combine Alpine for client-side UI state
- ✅ Test Livewire interactions thoroughly

### Getting Help

- **Laravel Livewire Docs:** https://livewire.laravel.com
- **Tabler-Blade Issues:** https://github.com/your-repo/issues
- **Bootstrap + Livewire:** Use `wire:ignore` for JS-managed elements
- **Alpine + Livewire:** Use `$wire` magic property

---

**Remember:** These components are designed to work WITH or WITHOUT Livewire. Choose the approach that fits your project best.
