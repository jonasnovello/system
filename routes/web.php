<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () { return view('system.dashboard');})
    ->middleware(['auth'])
    //->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('access-denied', function (){return view('system.access-denied');})
    ->name('access-denied');

require __DIR__.'/auth.php';


