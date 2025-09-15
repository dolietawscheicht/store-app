<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ShowProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'catalog');

Route::prefix('catalog')->group(function () {
	Route::get('/', MainPageController::class)->name('catalog');
	Route::get('/{category}', MainPageController::class)->name('catalog.category');
	Route::get('/{category}/products/{product}', ShowProductController::class)->name('catalog.products.show');
});
