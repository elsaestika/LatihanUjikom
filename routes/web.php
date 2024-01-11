<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
// use App\Http\Controllers\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
>>>>>>> 4edcca8 (second commit)

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
<<<<<<< HEAD
=======

Route::middleware(['statuslogin'])->group(function(){
    Route::get('/home', [HomeController::class, 'index']);
});

Route::post('/login', [LoginController::class, 'auth']);
Route::get('logout', [LoginController::class, 'logout']);

>>>>>>> 4edcca8 (second commit)
