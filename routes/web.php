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
Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard');
// fORM
Route::get('/dashboard/formblog',[DashboardController::class,"formblog"])->name('formblog');
Route::get('/dashboard/formportofolio',[DashboardController::class,"formpotofolio"])->name('formportofolio');
// Crée
Route::post('/admin/dashboard/blog',[DashboardController::class,"storeblog"])->name('dashboard.add-blog');
Route::post('/admin/dashboard/porto',[DashboardController::class,"storeporto"])->name('dashboard.add-porto');
// Show
Route::get('/dashboard/{id}/showblog', [DashboardController::class,"showblog"])->name("dashboard.showblog");
Route::get('/dashboard/{id}/showporto', [DashboardController::class,"showporto"])->name("dashboard.showporto");
// Edit
Route::get('/dashboard/{id}/editblog', [DashboardController::class, 'editblog'])->name('editblog.edit');
Route::put('/dashboard/{id}/udpateblog', [DashboardController::class, 'updateblog'])->name('updblog.update');
Route::get('/dashboard/{id}/editporto', [DashboardController::class, 'editporto'])->name('editporto.edit');
Route::put('/dashboard/{id}/udpateporto', [DashboardController::class, 'updateporto'])->name('updporto.update');
// Delete
Route::delete('/dashboard/{id}', [DashboardController::class,"destroyblog"])->name("dashboard.destroy");
Route::delete('/dashboard/{id}/delete', [DashboardController::class,"destroyporto"])->name("dashboard.delete");
