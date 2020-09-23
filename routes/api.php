<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/especies', function (Request $request) {
    return $request->especie();
});*/

Route::apiResource("especies","EspecieController");
Route::apiResource("mascotas","MascotaController");
Route::apiResource("personas","PersonaController");
