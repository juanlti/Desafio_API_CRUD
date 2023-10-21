<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[UserController::class,'index'])->name('index');
Route::post('/store',[UserController::class,'store'])->name('store');
Route::get('/peticionGenerarNombres',[UserController::class,'generateData'])->name('generateData');
Route::delete('/destroy/{user}',[UserController::class,'destroy'])->name('destroy');
Route::get('/edit/{user}',[UserController::class,'edit'])->name('edit');
Route::put('/update/{user}',[UserController::class,'update'])->name('update');
Route::get('/show/{user}',[UserController::class,'show'])->name('show');
Route::delete('/destroyAll',[UserController::class,'destroyAll'])->name('destroyAll');
