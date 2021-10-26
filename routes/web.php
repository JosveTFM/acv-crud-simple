<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::post('users/{id}', function ($id) {

// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::post('/logeo', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::resource('user', UserController::class);

// Route::get('/usuarios', [UserController::class, 'index']);
// Route::get('/usuarios/{id}', [UserController::class, 'show']);
// Route::post('/usuarios', [UserController::class, 'store']);
// Route::put('/usuarios/{usuario}', [UserController::class, 'update']);
// Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);
// Route::post('/regristrar', 'App\Http\Controllers\UserController@store');
// Route::post('/destroy', 'App\Http\Controllers\UserController@destroy');
