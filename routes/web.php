<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
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
});
