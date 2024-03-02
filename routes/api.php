<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAdminController;
use App\Http\Controllers\ApiArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/articles', [ApiArticleController::class, 'index']);
Route::post('/articles/search', [ApiArticleController::class, 'search']);
Route::post('/articles/category', [ApiArticleController::class, 'category']);
Route::get('/articles/{article}/show', [ApiArticleController::class, 'show']);

Route::post('/myarticles', [ApiArticleController::class, 'myindex']);
Route::post('/myarticles/create', [ApiArticleController::class, 'store']);
Route::put('/myarticles/{article}/edit', [ApiArticleController::class, 'update']);
Route::delete('/myarticles/{article}/delete', [ApiArticleController::class, 'destroy']);

Route::get('/admin/articles', [ApiAdminController::class, 'index']);
Route::get('/admin/categories', [ApiAdminController::class, 'indexCategories']);
Route::post('/admin/categories/create', [ApiAdminController::class, 'store']);
Route::put('/admin/categories/{category}/edit', [ApiAdminController::class, 'update']);
Route::delete('/admin/categories/{category}/delete', [ApiAdminController::class, 'destroy']);