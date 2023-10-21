<?php

use App\Http\Resources\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('apiGenerarNombres',[UserApiController::class,'generarNombres']);
///Route::get('generar-nombres', 'NombreAleatorioController@generarNombres');

//Route::get('apiGenerarNombres', 'UserApiController@generateRandomUsers');

