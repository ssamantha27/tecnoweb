<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/rol', [RolController::class, 'index']);
Route::post('/rol/registrar', [RolController::class, 'store']);
Route::put('/rol/actualizar', [RolController::class, 'update']);
Route::get('/rol/selectRol', [RolController::class, 'selectRol']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/registrar', [UserController::class, 'store']);
Route::put('/user/actualizar', [UserController::class, 'update']);
Route::get('/user/selectUsuario', [UserController::class, 'selectUsuario']);

