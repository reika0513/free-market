<?php

use App\Http\Controllers\ItemController;
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
Route::get('/item/{item_id}', [ItemController::class, 'getDetail']);

Route::middleware('auth')->group(function () {
Route::get('/mypage', [ItemController::class, 'mypage']);
Route::get('/add', [ItemController::class, 'add']);
Route::post('/sell', [ItemController::class, 'sell']);

Route::get('/purchase/address', [ItemController::class, 'address']);
Route::post('/purchase/{item_id}', [ItemController::class, 'postDetail']);
Route::post('/comment', [ItemController::class, 'comment']);

Route::get('/mypage/create_profile', [ItemController::class, 'create']);
Route::get('/mypage/get_profile', [ItemController::class, 'getProfile']);
Route::post('/mypage/post_profile', [ItemController::class, 'postProfile']);
});