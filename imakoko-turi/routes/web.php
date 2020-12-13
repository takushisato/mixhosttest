<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\FishingboatController;
use App\Http\Controllers\PostController;

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

// トップページと規約
Route::get('/', [TopController::class, 'index']);
Route::view('/termsofservice', 'termsofservice');

// 釣船用
Route::get('/fishingboats', [FishingboatController::class, 'index']);
Route::get('/fishingboat/{id}', [FishingboatController::class, 'show']);
Route::get('/fishingboat/new', [FishingboatController::class, 'create']);
Route::post('/fishingboat', [FishingboatController::class, 'store']);
Route::get('/fishingboat/edit/{id}', [FishingboatController::class, 'edit']);
Route::get('/fishingboat/update/{id}', [FishingboatController::class, 'update']);
Route::delete('/fishingboat/{id}', [FishingboatController::class, 'destroy']);

// 会員用
Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/post/new', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/edit/{id}', [PostController::class, 'edit']);
Route::get('/post/update/{id}', [PostController::class, 'update']);
Route::delete('/post/{id}', [PostController::class, 'destroy']);
