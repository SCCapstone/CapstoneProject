<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;


class HouseController extends Controller
{
    public function signin(){
        return view('sign-in');
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
}
