<?php

use App\Http\Controllers\API\AlquranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function() {
    route::group(['prefix' => 'al-quran'], function() {
        Route::get('/surah', [AlquranController::class, 'getAllSurah']);
    });
});
