<?php

use App\Http\Controllers\Admin\AdminCOntroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',[FrontendController::class,'index'])->name('dashboard');

    Route::get('categories',[CategoryController::class,"index"]);
    Route::get('add-categories',[CategoryController::class,"add"]);
    Route::post('insert-category',[CategoryController::class,"insert"]);
});