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
Route::get('/mypage', [ItemController::class, 'mypage']);
Route::get('/profile_edit',[ItemController::class,'edit']);
Route::get('/add', [ItemController::class, 'add']);
Route::post('/sell', [ItemController::class, 'sell']);
Route::get('/item/{{$myitem->id}}', [ItemController::class, 'getDetail']);

Route::get('/profile', [ItemController::class, 'profile']);
