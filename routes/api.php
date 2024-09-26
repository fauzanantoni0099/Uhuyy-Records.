<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\ArtistController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('artist',ArtistController::class);
//Route::apiResource('album', \App\Http\Controllers\Api\AlbumController::class);
//Route::apiResource('event', \App\Http\Controllers\Api\EventController::class);
//Route::apiResource('merchandise', \App\Http\Controllers\Api\MerchandiseController::class);
//Route::apiResource('song', \App\Http\Controllers\Api\SongController::class);
//Route::apiResource('testimonial', \App\Http\Controllers\Api\TestimonialController::class);
