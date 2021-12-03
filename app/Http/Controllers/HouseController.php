<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    public function storeShoppingTable(){
        $updateDetails = [
            'done' => request('done'),
            'item' => request('item'),
            'urgency' => request('urgency'),
            'assignee' => request('assignee')
        ];
        DB::table('shopping')
            ->where('id', 1)
            ->update($updateDetails);
        error_log(request('done'));
        error_log(request('item'));
        error_log(request('urgency'));
        error_log(request('assignee'));
        return redirect( route('shopping') );
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
