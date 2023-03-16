<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Auth::routes();

//Home
Route::get('/home', [HomeController::class, 'home'])->name('home');

//Frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');

//User
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/update/name', [UserController::class, 'update_name'])->name('update_name');
Route::post('/update/image', [UserController::class, 'update_image'])->name('update_image');
Route::post('/update/password', [UserController::class, 'update_password'])->name('update_password');

//Category
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::post('/category/add', [CategoryController::class, 'category_add'])->name('category_add');
Route::get('/category/delete/{id}', [CategoryController::class, 'category_delete'])->name('category_delete');

//Article
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::post('/article/add', [ArticleController::class, 'article_add'])->name('article_add');
Route::get('/article/view', [HomeController::class, 'article_view'])->name('article_view');
Route::get('/article/edit/view/{id}', [HomeController::class, 'article_edit_view'])->name('article_edit_view');
Route::get('/article/delete/{id}', [ArticleController::class, 'article_delete'])->name('article_delete');