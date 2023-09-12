<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HotelController;

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
// below is test api working
Route::prefix('user')->group(function () {
    Route::get('/all', [UserController::class, 'index']);
    Route::post('/add', [UserController::class, 'create']);
});
Route::prefix('follower')->group(function () {
    Route::get('/get-followers/{user_id}', [FollowerController::class, 'getFollowers']);
    Route::get('/follow/{user_id}/{follower_id}', [FollowerController::class, 'follow']);
});
Route::prefix('post')->group(function () {
    Route::post('/', [PostController::class, 'createPost']);
    Route::get('/get-posts', [PostController::class, 'getPosts']);
});
Route::get('/users/{id}/{name}', function (Request $request, string $id) {

    $array = array("size" => "XL", "color" => "gold");
    return $array['size'];
});
Route::prefix('hotel')->group(function () {
    Route::post('/book-hotel', [HotelController::class, 'bookHotel']);
    Route::get('/get-posts', [HotelController::class, 'getPosts']);
});