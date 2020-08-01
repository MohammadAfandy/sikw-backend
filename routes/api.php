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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('kelurahan', 'KelurahanController');
Route::apiResource('rw', 'RwController');
Route::apiResource('rt', 'RtController');
Route::apiResource('keluarga', 'KeluargaController');
Route::apiResource('warga', 'WargaController');

