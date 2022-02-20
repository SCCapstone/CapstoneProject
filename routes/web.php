<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

use App\Http\Controllers\HouseController;

Route::get('/', function () {
    /* TODO: direct user to home page if logged in or login page if not */
    return view('home');
});

Route::get('/auth/login', [HouseController::class, 'login']);
Route::get('/auth/register', [HouseController::class, 'register']);
Route::get('/home', [HouseController::class, 'home']);
Route::get('/shopping', [HouseController::class, 'shopping'])->name('shopping');
Route::post('/shopping', [HouseController::class, 'storeShoppingTable']);
Route::get('/calendar', [HouseController::class, 'calendar']);
Route::get('/chores', [HouseController::class, 'chores']);
Route::get('/contact', [HouseController::class, 'contact']);

Route::get('/settings', [HouseController::class, 'settings']);
Route::get('/settings/emergency', [HouseController::class, 'settingsEmergency'])->name('settings.emergency');
Route::post('/settings/emergency', [HouseController::class, 'storeEmergencySettings']);
Route::get('/settings/housing', [HouseController::class, 'settingsHousing'])->name('settings.housing');
Route::post('/settings/housing', [HouseController::class, 'storeHousingSettings']);
Route::get('/settings/personal', [HouseController::class, 'settingsPersonal'])->name('settings.personal');
Route::post('/settings/personal', [HouseController::class, 'storePersonalSettings']);
Route::get('/settings/invite', [HouseController::class, 'settingsInvite'])->name('settings.invite');
Route::post('/settings/invite', [HouseController::class, 'storeInviteSettings']);
Route::get('/settings/social', [HouseController::class, 'settingsSocial'])->name('settings.social');
Route::post('/settings/social', [HouseController::class, 'storeSocialSettings']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('oauth2callback', [GoogleController::class, 'handleGoogleCallback']);
