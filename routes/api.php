<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelRoomController;

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


Route::get('/hotel-rooms', [HotelRoomController::class, 'index']);
Route::get('/hotel-rooms/{room_number}', [HotelRoomController::class, 'show']);
Route::post('/hotel-rooms', [HotelRoomController::class, 'store']);
Route::put('/hotel-rooms/{room_number}', [HotelRoomController::class, 'update']);
Route::delete('/hotel-rooms/{room_number}', [HotelRoomController::class, 'destroy']);
Route::get('/hotel-roomty/{room_type}', [HotelRoomController::class, 'search']);
Route::get('/hotel-roomfind/{id}', [HotelRoomController::class, 'find']);
