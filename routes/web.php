<?php

use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\WebController::class, 'Welcome']);

Route::group(['prefix' => '/admin'], function () {
    Route::get('/dashboard', function () {  
        return view('admin');
    })->name('admin.home');
    // Route::resource('/portfolios', \App\Http\Controllers\PortfolioController::class);
    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::get('/portfolios/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
    Route::post('/portfolios/store', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::post('/portfolios/{id}/update', [PortfolioController::class, 'update'])->name('portfolios.update');
    Route::post('/portfolios/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');
});
Auth::routes([
    // 'register' => false,
    // 'confirm' => false,
]);
