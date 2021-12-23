<?php

use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\IdBarang;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('barang',[DataBarangController::class,'index']);
Route::get('idbarang',[IdBarang::class,'getID']);
Route::post('barang',[DataBarangController::class,'create']);
Route::put('barang',[DataBarangController::class,'update']);
Route::delete('barang',[DataBarangController::class,'delete']);