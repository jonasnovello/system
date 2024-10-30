<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->name('authentication');

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::group(['middleware' => ['auth', 'permissions:users']], function () {

    //Lista todos os usuários
    Route::get('users', [UserController::class, 'show'])
        ->name('users.show');

    //Formulário de cadastro de novo usuário
    Route::get('users/new', [UserController::class, 'create'])
        ->name('users.create');

    Route::post('users/new', [UserController::class, 'store'])
        ->name('users.store');

    Route::get('users/edit/{id}', [UserController::class, 'edit'])
        ->name('users.edit');
    Route::post('users/edit', [UserController::class, 'update'])
        ->name('users.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])
        ->name('users.destroy');
    Route::post('users/reference', [UserController::class, 'reference'])
        ->name('users.reference');
});

Route::group(['middleware' => ['auth', 'permissions:vehicles']], function(){
    Route::get('vehicles', [VehicleController::class, 'show'])
        ->name('products.show');
});
