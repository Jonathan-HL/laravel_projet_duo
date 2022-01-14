<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormBlogController;
use App\Http\Controllers\FormPortofolioController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

    //FRONT TEMPLATE
Route::get('/', [FrontController::class, "home"])->name('home');
Route::get('/blog', [FrontController::class, "blog"])->name('blog');
Route::get('/portfolio', [FrontController::class, "portfolio"])->name('portfolio');
Route::get('/contact', [FrontController::class, "contact"])->name('contact');

//BACK ADMIN
Route::get('/dashboard',[DashboardController::class,"index"])->name(('dashboard'));
Route::get('/dashboard/formblog',[DashboardController::class,"formblog"])->name(('formblog'));
Route::get('/dashboard/formportofolio',[DashboardController::class,"formpotofolio"])->name(('formportofolio'));
Route::post('/admin/dashboard',[DashboardController::class,"store"])->name(('dashboard.add'));

