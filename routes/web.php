<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HouseController;

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
    return view('pages.welcome');
});
Route::get('/pages/room-num', [HouseController::class, 'roomnum']);
Route::post('/pages/roomNum', [HouseController::class, 'assignRoom']);
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('oauth2callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('user', [HouseController::class, 'trySignIn']);
Route::post('/pages/logout', [HouseController::class, 'logout']);

Route::get('/pages/contact', [HouseController::class, 'contact']);
Route::get('/pages/home-page', [HouseController::class, 'homepage']);
Route::get('/pages/shopping', [HouseController::class, 'shopping'])->name('shopping');
Route::post('/pages/shopping', [HouseController::class, 'storeShoppingTable']);
Route::get('/pages/calendar', [HouseController::class, 'calendar']);
Route::get('/pages/chores', [HouseController::class, 'chores']);
Route::post('/pages/chores', [HouseController::class, 'storeChores']);

Route::get('/pages/room-num', [HouseController::class, 'roomnum']);
Route::post('/pages/roomNum', [HouseController::class, 'assignRoom']);

Route::get('/pages/index', [HouseController::class, 'index']);

Route::get('/pages/settings', [HouseController::class, 'settings']);
Route::get('/pages/settingsPages/emergencySettings', [HouseController::class, 'emergencySettings'])->name('settings.emergency');
Route::get('/pages/settingsPages/informationSettings', [HouseController::class, 'informationSettings'])->name('settings.information');
Route::get('/pages/settingsPages/personalSettings', [HouseController::class, 'personalSettings'])->name('settings.personal');
Route::get('/pages/settingsPages/socialsSettings', [HouseController::class, 'socialsSettings'])->name('settings.socials');
Route::post('/pages/settingsPages/emergencySettings', [HouseController::class, 'storeEmergencySettings']);
Route::post('/pages/settingsPages/informationSettings', [HouseController::class, 'storeInformationSettings']);
Route::post('/pages/settingsPages/personalSettings', [HouseController::class, 'storePersonalSettings']);
Route::post('/pages/settingsPages/socialsSettings', [HouseController::class, 'storeSocialsSettings']);
Route::post('/pages/settingsPages/logout', [HouseController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
