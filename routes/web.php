<?php

use App\Http\Controllers\productController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',[productController::class,'index']);
Route::get('/product/{product}',[productController::class,'show']);
Route::get('/product/create/post',[productController::class,'create']);
Route::post('/product/create/post',[productController::class, 'store']);
Route::get('/product/{product}/edit',[productController::class,'edit']);
Route::put('/product/{product}/edit',[productController::class,'update']);

Route::delete('/product/{product}',[productController::class,'destroy']);
