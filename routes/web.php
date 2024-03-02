<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home Page'
    ]);
});

Route::get('/home', function () {
    return view('welcome', [
        'title' => 'Home Page'
    ]);
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles/search', [ArticleController::class, 'search']);
Route::post('/articles/category', [ArticleController::class, 'category']);
Route::get('/articles/{article}/show', [ArticleController::class, 'show']);
   

Route::get('/myarticles', [ArticleController::class, 'myindex']);
Route::get('/myarticles/create', [ArticleController::class, 'create']);
Route::post('/myarticles/create', [ArticleController::class, 'store']);
Route::get('/myarticles/{article}/edit', [ArticleController::class, 'edit']);
Route::put('/myarticles/{article}/edit', [ArticleController::class, 'update']);
Route::delete('/myarticles/{article}/delete', [ArticleController::class, 'destroy']);



Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/categories', [AdminController::class, 'indexCategories']);
Route::post('/admin/categories/create', [AdminController::class, 'store']);
Route::get('/admin/categories/{category}/edit', [AdminController::class, 'edit']);
Route::put('/admin/categories/{category}/edit', [AdminController::class, 'update']);
Route::delete('/admin/categories/{category}/delete', [AdminController::class, 'destroy']);