<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;


class HouseController extends Controller
{
    public function signin(){
        return view('pages.sign-in');
    }
    public function signup(){
        return view('pages.sign-up');
    }
    public function index(){
        return view('pages.index');
    }
    public function calendar(){
        return view('pages.calendar');
    }
    public function settings(){
        return view('pages.settings');
    }
    public function chat(){
        return view('pages.chat');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function shopping(){
        return view('pages.shopping');
    }
    public function homepage(){
        return view('pages.home-page');
    }
    public function emergencySettings(){
        return view('pages.settingsPages.emergencySettings');
    }
    public function informationSettings(){
        return view('pages.settingsPages.informationSettings');
    }
    public function personalSettings(){
        return view('pages.settingsPages.personalSettings');
    }
    public function roommatesSettings(){
        return view('pages.settingsPages.roommatesSettings');
    }
    public function socialsSettings(){
        return view('pages.settingsPages.socialsSettings');
    }
}
