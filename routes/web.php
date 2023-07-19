<?php

use App\Http\Controllers\User\UserController;
use App\Http\Middleware\myMiddleware;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.home');
    })->name('dashboard');

    Route::group(['prefix' => 'user', 'middleware' => myMiddleware::class], function () {
        Route::get('home', [UserController::class, 'home']);
        Route::get('about', [UserController::class, 'about']);
        Route::get('service', [UserController::class, 'service']);
    });

    Route::get('userPage', function () {
        return 'this is userPage';
    });
});

// middleware
// middleware declaration  | 2. Declare middleware at kernel | 3.use middleware
