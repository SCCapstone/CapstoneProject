<?php

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

Route::get('/', function () {
    return view('home');
});

//routes
use App\Http\Controllers\HouseController;
Route::get('/contact', [HouseController::class, 'contact']);

Route::get('/settings', [HouseController::class, 'settings']);

Route::get('/sign-in', [HouseController::class, 'signin']);
Route::get('/sign-up', [HouseController::class, 'signup']);
Route::get('/home', [HouseController::class, 'home']);

Route::get('/shopping', [HouseController::class, 'shopping']);
Route::get('/calendar', [HouseController::class, 'calendar']);
Route::get('/chat', [HouseController::class, 'chat']);
