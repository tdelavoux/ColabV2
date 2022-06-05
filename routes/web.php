<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppControllers\IndexController;
use \App\Http\Middleware\Authenticate;

use App\Http\Controllers\Auth\AuthentificationController;

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

/* --------------------- AUTHENTIFICATION ---------------------------------------------- */
Route::get('/login', [AuthentificationController::class, 'execute'])->name('login');
Route::get('/register', [AuthentificationController::class, 'register'])->name('register');
Route::get('/logout', [AuthentificationController::class, 'logout'])->name('logout');

Route::post('/login/etablishLogin', [AuthentificationController::class, 'login'])->name('verifyLogin');
Route::post('/register/newUser', [AuthentificationController::class, 'createUser'])->name('createUser');

Route::middleware([Authenticate::class])->group(function(){
    Route::get('/', [IndexController::class, 'execute']);
});
