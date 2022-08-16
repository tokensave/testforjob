<?php


use App\Http\Controllers\Api\BookController;
use App\Models\Book;
use GuzzleHttp\Psr7\Uri;
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


Route::get('/book', [BookController::class, 'list']);


Route::get('/book/{id}', [BookController::class, 'show']);

Route::put('/book/{id}', [BookController::class, 'update']);

Route::delete('/book/{id}', [BookController::class, 'destroy']);