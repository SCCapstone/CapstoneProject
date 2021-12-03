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

Route::get('/welcome', [HouseController::class, 'welcome']);
Route::get('/sign-up', [HouseController::class, 'signup']);
Route::get('/home', [HouseController::class, 'home']);

Route::get('/shopping', [HouseController::class, 'shopping'])->name('shopping');
Route::post('/shopping', [HouseController::class, 'storeShoppingTable']);

Route::get('/calendar', [HouseController::class, 'calendar']);
Route::get('/chat', [HouseController::class, 'chat']);
Route::get('/contact', [HouseController::class, 'contact']);

Route::get('/settings', [HouseController::class, 'settings']);
Route::get('/settings/emergency', [HouseController::class, 'settingsEmergency']);
Route::get('/settings/social', [HouseController::class, 'settingsSocial']);
Route::get('/settings/profile', [HouseController::class, 'settingsProfile']);
Route::get('/settings/invite', [HouseController::class, 'settingsInvite']);
Route::get('/settings/housing', [HouseController::class, 'settingsHousing']);