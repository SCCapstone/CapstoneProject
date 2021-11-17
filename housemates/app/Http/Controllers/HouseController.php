<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;


class HouseController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function signup(){
        return view('sign-up');
    }
    public function calendar(){
        return view('calendar');
    }
    public function settings(){
        return view('settings');
    }
    public function chat(){
        return view('chat');
    }
    public function contact(){
        return view('contact');
    }
    public function shopping(){
        return view('shopping');
    }
    public function home(){
        return view('home');
    }
    public function settingsInvite() {
        return view('settings.invite');
    }
    public function settingsEmergency() {
        return view('settings.emergency');
    }
    public function settingsHousing() {
        return view('settings.housing');
    }
    public function settingsProfile() {
        return view('settings.profile');
    }
    public function settingsSocial() {
        return view('settings.social');
    }
}
