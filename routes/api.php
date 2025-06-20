<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('posts', PostController::class);
Route::post('/register', [PostController::class, 'register']);
Route::post('/login', [PostController::class, 'login']);
Route::post('/logout', [PostController::class, 'logout'])->middleware('auth:sanctum');


Route::prefix('')->group(function () {
    // Index (List all persons)
    Route::get('/', [App\Http\Controllers\PersonController::class, 'index']);

    // Show (Get a specific person by ID)
    Route::get('/{user_id}', [PersonController::class, 'show']);

    // Store (Create a new person)
    Route::post('/', [PersonController::class, 'store']);

    // Update (Update an existing person by ID)
    Route::put('/{user_id}', [PersonController::class, 'update']);

    // Delete (Delete a person by ID)
    Route::delete('/{user_id}', [PersonController::class, 'destroy']);
});