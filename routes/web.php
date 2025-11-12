<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('demo')->name('demo.')->controller(DemoController::class)->group(function () {
    Route::get('/accordion', 'accordion')->name('accordion');
    Route::get('/alert', 'alert')->name('alert');
    Route::get('/avatars', 'avatars')->name('avatars');
    Route::get('/badge', 'badge')->name('badge');
    Route::get('/button', 'button')->name('button');
    Route::get('/cards', 'cards')->name('cards');
    Route::get('/carousel', 'carousel')->name('carousel');
    Route::get('/divider', 'divider')->name('divider');
    Route::get('/dropdowns', 'dropdowns')->name('dropdowns');
    Route::get('/empty', 'empty')->name('empty');
    Route::get('/forms', 'forms')->name('forms');
    Route::get('/image', 'image')->name('image');
    Route::get('/list-group', 'listGroup')->name('list-group');
    Route::get('/modals', 'modals')->name('modals');
    Route::get('/offcanvas', 'offcanvas')->name('offcanvas');
    Route::get('/pagination', 'pagination')->name('pagination');
    Route::get('/placeholder', 'placeholder')->name('placeholder');
    Route::get('/progress', 'progress')->name('progress');
    Route::get('/ribbon', 'ribbon')->name('ribbon');
    Route::get('/spinner', 'spinner')->name('spinner');
    Route::get('/status', 'status')->name('status');
    Route::get('/steps', 'steps')->name('steps');
    Route::get('/tables', 'tables')->name('tables');
    Route::get('/tabs', 'tabs')->name('tabs');
    Route::get('/timeline', 'timeline')->name('timeline');
    Route::get('/toasts', 'toasts')->name('toasts');
    Route::get('/layout-vertical', 'layoutVertical')->name('layout-vertical');
    Route::get('/layout-boxed', 'layoutBoxed')->name('layout-boxed');
    Route::get('/auth-pages', 'authPages')->name('auth-pages');
});

// Documentation Routes
Route::prefix('docs')->name('docs.')->controller(DocumentationController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/search', 'search')->name('search');
    Route::get('/{path}', 'show')->where('path', '.*')->name('show');
});

// Protected Routes (require authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update')->middleware('throttle:profile');
        Route::put('/password', 'updatePassword')->name('password.update')->middleware('throttle:profile');
        Route::delete('/', 'destroy')->name('destroy')->middleware('throttle:profile');
    });
});
