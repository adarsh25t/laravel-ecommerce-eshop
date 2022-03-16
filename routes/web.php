<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CategoryController as UserCategoryController;
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

Route::get('/view-categorie-items/{name}',[UserCategoryController::class,"index"]);
Route::get('/viewProduct/{name}',[UserCategoryController::class,'view']);


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',[FrontendController::class,'index'])->name('dashboard');

    Route::get('categories',[CategoryController::class,"index"]);
    Route::get('add-categories',[CategoryController::class,"add"]);
    Route::post('insert-category',[CategoryController::class,"insert"]);
    Route::get('editcategory/{id}',[CategoryController::class,"editCategory"]);
    Route::put('update-category/{id}',[CategoryController::class,"updateCategory"]);
    Route::get('deletecategory/{id}',[CategoryController::class,'deleteCategory']);


    Route::get('products',[ProductController::class,"index"]);
    Route::get('add-product',[ProductController::class,"add"]);
    Route::post('insert-product',[ProductController::class,"addProduct"]);
    Route::get('editproduct/{id}',[ProductController::class,"editProduct"]);
    Route::put('update-product/{id}',[ProductController::class,'updateProduct']);
    Route::get('deleteproduct/{id}',[ProductController::class,"deleteProduct"]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
