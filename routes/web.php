<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio/home', [PortfolioController::class, 'home'])->name('portfolio.home');
Route::get('/portfolio/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::get('/portfolio/about', [PortfolioController::class, 'about'])->name('portfolio.about');