<?php

use App\Http\Controllers\AbstractController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
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

Route::prefix('/first')->group(function () {

    Route::Post('/users', [UserController::class, 'create']);
    Route::Get('/users', [UserController::class, 'findAll']);
    Route::Get('/users/{id}', [UserController::class, 'findOne']);
    Route::Put('/users/{user}', [UserController::class, 'update']);
    Route::Delete('/users/{user}', [UserController::class, 'delete']);
});

Route::prefix('/second')->group(function () {
    Route::Post('/handler', [AbstractController::class, 'arrayHandler']);
});

Route::prefix('/last')->group(function () {
    Route::Get('/result', [UsuarioController::class, 'getResults']);
});