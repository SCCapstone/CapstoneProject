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
    return view('welcome');
});

//routes
use App\Http\Controllers\HousematesController;
Route::get('/contact', [HousematesController::class, 'contact']);

Route::get('/settings', [HousematesController::class, 'settings']);

Route::get('/sign-in', [HousematesController::class, 'sign-in']);
Route::get('/sign-up', [HousematesController::class, 'sign-up']);

Route::get('/shopping', [HousematesController::class, 'shopping']);
Route::get('/calendar', [HousematesController::class, 'calendar']);
Route::get('/chat', [HousematesController::class, 'chat']);
