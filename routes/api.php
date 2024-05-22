<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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
Route::post('/login', [UserController::class, 'login']);






Route::middleware('auth:sanctum')->group(function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::get('/authorsGet', [AuthorController::class, 'index']);
    Route::put('/authorsUpdate/{author_id}', [AuthorController::class, 'update']);
    Route::post('/books/{author_id}', [BookController::class, 'store']);
    Route::get('/booksGet', [BookController::class, 'index']);

});


