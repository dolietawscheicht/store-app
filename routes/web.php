<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ShowProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'catalog');

Route::prefix('catalog')->group(function () {
	Route::get('/', MainPageController::class)->name('catalog');
	Route::get('/{category}', MainPageController::class)->name('catalog.category');
	Route::get('/{category}/products/{product}', ShowProductController::class)->name('catalog.products.show');
});


Route::prefix('auth')->controller(AuthController::class)->group(function () {
	Route::get('signup-form', 'showSignupForm')->name('auth.signup-form');
	Route::get('login-form', 'showLoginForm')->name('auth.login-form');
	Route::post('signup', 'signup')->name('auth.signup');
	Route::post('login', 'login')->name('auth.login');
	Route::get('logout', 'logout')->name('auth.logout');
});
