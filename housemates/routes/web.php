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
use App\Http\Controllers\HouseController;
Route::get('/pages/contact', [HouseController::class, 'contact']);

Route::get('/pages/settings', [HouseController::class, 'settings']);

Route::get('/pages/sign-in', [HouseController::class, 'signin']);
Route::get('/pages/sign-up', [HouseController::class, 'signup']);
Route::get('/pages/home-page', [HouseController::class, 'homepage']);

Route::get('/pages/shopping', [HouseController::class, 'shopping']);
Route::get('/pages/calendar', [HouseController::class, 'calendar']);
Route::get('/pages/chat', [HouseController::class, 'chat']);

Route::get('/pages/index', [HouseController::class, 'index']);

Route::get('/pages/settingsPages/emergencySettings', [HouseController::class, 'emergencySettings']);
Route::get('/pages/settingsPages/informationSettings', [HouseController::class, 'informationSettings']);
Route::get('/pages/settingsPages/personalSettings', [HouseController::class, 'personalSettings']);
Route::get('/pages/settingsPages/roommatesSettings', [HouseController::class, 'roommatesSettings']);
Route::get('/pages/settingsPages/socialsSettings', [HouseController::class, 'socialsSettings']);

Route::get('housedb', function() {
    return view('housedb');
});
