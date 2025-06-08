<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [ItemController::class, 'index']);

Route::middleware('auth')->group(function () {
Route::get('/mypage', [ItemController::class, 'mypage']);
Route::get('/add', [ItemController::class, 'add']);
Route::post('/sell', [ItemController::class, 'sell']);
});

Route::get('/item/{item_id}', [ItemController::class, 'getDetail']);
Route::post('/purchase/{item_id}', [ItemController::class, 'postDetail']);


Route::prefix('profile')->group(function () {
    Route::get('/mypage', [ProfileController::class, 'mypage']);
    Route::get('/mypage/create_profile', [ProfileController::class, 'create']);
    Route::get('/mypage/get_profile', [ProfileController::class, 'getProfile']);
    Route::post('/mypage/post_profile', [ProfileController::class, 'postProfile']);
});