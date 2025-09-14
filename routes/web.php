<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'catalog');

Route::get('catalog', [MainPageController::class, 'index'])->name('pages.catalog');
Route::get('catalog/{category}', [MainPageController::class, 'index'])->name('pages.catalog');
