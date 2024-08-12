<?php

use Illuminate\Support\Facades\Route;

// Routes that aren't waiting an parameter

Route::get('/', [\App\Http\Controllers\mainController::class, 'main'])->name('site.index');
Route::get('/about', [\App\Http\Controllers\aboutUsController::class, 'aboutUs'])->name('site.aboutUs');
Route::get('/contact', [\App\Http\Controllers\contactController::class, 'contact'])->name('site.contact');
Route::post('/contact', [\App\Http\Controllers\contactController::class, 'contact'])->name('site.contact');
Route::get('/login', function(){ return 'login';})->name('site.login');

// Creating an agroupment for the private routes

Route::prefix('/app')->group(function(){    
    Route::get('/products', function(){ return 'products';})->name('app.products');
    Route::get('/suppliers', [\App\Http\Controllers\suppliersController::class, 'index'])->name('app.suppliers');
    Route::get('/customers', function(){ return 'customers';})->name('app.customers');
});

// Fallback route

Route::fallback(function(){
    echo 'A rota acessada não existe ' . '<a href="' . route('site.index') . '">Voltar à página principal</a>';
});

// Parameters to controller (test)

Route::get('/test/{p1}/{p2}', [\App\Http\Controllers\TestController::class, 'test'])->name('site.test');