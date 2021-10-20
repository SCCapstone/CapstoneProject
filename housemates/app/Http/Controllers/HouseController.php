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
}