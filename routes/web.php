<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('/pages/shopping', [HouseController::class, 'shopping'])->name('shopping');
Route::post('/pages/shopping', [HouseController::class, 'storeShoppingTable']);
Route::get('/pages/calendar', [HouseController::class, 'calendar']);
Route::get('/pages/chat', [HouseController::class, 'chat']);

Route::get('/pages/index', [HouseController::class, 'index']);

Route::get('/pages/settingsPages/emergencySettings', [HouseController::class, 'emergencySettings'])->name('settings.emergency');
Route::get('/pages/settingsPages/informationSettings', [HouseController::class, 'informationSettings'])->name('settings.information');
Route::get('/pages/settingsPages/personalSettings', [HouseController::class, 'personalSettings'])->name('settings.personal');
Route::get('/pages/settingsPages/roommatesSettings', [HouseController::class, 'roommatesSettings'])->name('settings.roommates');
Route::get('/pages/settingsPages/socialsSettings', [HouseController::class, 'socialsSettings'])->name('settings.socials');

Route::post('/pages/settingsPages/emergencySettings', [HouseController::class, 'storeEmergencySettings']);
Route::post('/pages/settingsPages/informationSettings', [HouseController::class, 'storeInformationSettings']);
Route::post('/pages/settingsPages/personalSettings', [HouseController::class, 'storePersonalSettings']);
Route::post('/pages/settingsPages/roommatesSettings', [HouseController::class, 'storeRoommatesSettings']);
Route::post('/pages/settingsPages/socialsSettings', [HouseController::class, 'storeSocialsSettings']);