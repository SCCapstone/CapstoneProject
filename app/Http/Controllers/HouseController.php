<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Contact;
use App\Models\Landlord;
use App\Models\User;
use App\Models\Shopping;
use App\Models\Chores;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HouseController extends Controller {
    
    /* AUTHENTICATION AND ACCOUNT HANDLING */
    
    public function login(){
        return redirect()->intended('/pages/room-num');
    }
    public function logout(){
        Auth::logout(Auth::user());
        return redirect()->intended('/');
    }
    public function trySignIn(Request $req) {
        $userInfo = [
            'email' => request('email'),
            'password' => request('password')
        ];
        $finduserU = User::where('email', $userInfo['email'])->first();
        if ($finduserU) {
            Auth::login($finduserU);
            return redirect()->intended('/pages/room-num');
        } else {
            $newUser = User::create([
                'name' => $userInfo['email'],
                'email' => $userInfo['email'],
                'password' => encrypt($userInfo['password'])
            ]);
            Auth::login($newUser);
            return redirect()->intended('/pages/room-num');
        }
        $req->session()->put('email', $userInfo['email']);
        $req->session()->put('id', Auth::user()->id);
    }
    public function roomnum() {
        return view('pages.room-num');
    }
    public function assignRoom(Request $req) {
        $roomNum = request('roomnum');
        $id = Auth::user()->id;
        $affected = DB::update('UPDATE users SET house_num=? WHERE id=?', [$roomNum, $id]);

        $findLandlord = Landlord::where('landlordnum', $roomNum)->first();
        if(!$findLandlord){
            $newLandlord = Landlord::create(['landlordnum' => $roomNum]);

            for($i=1; $i<11; $i++){
                $newShoppingList = Shopping::create(['local_id' => $i, 'house_num' => $roomNum]);
                $newChoreList = Chores::create(['local_id' => $i, 'house_num' => $roomNum]);
            }
        }
        return redirect()->intended('/pages/home-page');
    }

    /* MAIN PAGES */

    public function homepage(){
        return view('pages.home-page');
    }
    public function index(){
        return view('pages.index');
    }
    public function calendar(){
        return view('pages.calendar');
    }
    public function chores(){
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)->get();
        return view('pages.chores', ['users' => $users]);
    }
    public function storeChores(){

        $boxLimit = 11;
        $choreBox = 1;
        $checkbox = "checkbox";
        $item = "item";
        $urgency = "urgency";
        $assignee = "assignee";

        for($i=1; $i<$boxLimit; $i++){
            if(request($checkbox.strval($i))==true){
                $updateDetails = [
                    'item' => null,
                    'urgency' => null,
                    'assignee' => null,
                ];
            } else{
                $updateDetails = [
                    'item' => request($item.strval($i)),
                    'urgency' => request($urgency.strval($i)),
                    'assignee' => request($assignee.strval($i)),
                    'list_size' => request('extendChores')
                ];
            }
            DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->update($updateDetails);
        }
        
        return redirect()->intended('/pages/chores');
    }
    public function contact(){
        $landlords = DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->first();
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)
            ->whereNotIn('id', DB::table('users')->select('id')->where('id', Auth::user()->id))->get();
        return view('pages.contact', ['landlords' => $landlords], ['users' => $users]);
    }
    public function shopping(){
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)->get();
        return view('pages.shopping', ['users' => $users]);
    }
    public function storeShoppingTable(){

        $boxLimit = 11;
        $choreBox = 1;
        $checkbox = "checkbox";
        $item = "item";
        $urgency = "urgency";
        $assignee = "assignee";

        for($i=1; $i<$boxLimit; $i++){
            $updateDetails = [
                'done' => request($checkbox.strval($i)),
                'item' => request($item.strval($i)),
                'urgency' => request($urgency.strval($i)),
                'assignee' => request($assignee.strval($i))
            ];
            DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->update($updateDetails);
        }
        
        return redirect( route('shopping') );
    }
    
    /* SETTINGS */

    public function emergencySettings(){
        return view('pages.settingsPages.emergencySettings');
    }
    public function storeEmergencySettings() {
        $updateDetails = [
            'emergencyName' => request('emname'),
            'emergencyPhone' => request('emnum'),
            'emergencyRelation' => request('emrel')
        ];
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($updateDetails); 
        error_log(request('emname'));
        error_log(request('emnum'));
        error_log(request('emrel'));
        return redirect( route('pages.settingsPages.emergencySettings') );
    }

    public function informationSettings(){
        $landlords = Landlord::all();
        return view('pages.settingsPages.informationSettings', ['landlords' => $landlords]);
    }
    public function storeInformationSettings() {
        $updateDetails = [
            'housingType' => request('housing'),
            'rentalCompany' => request('rent'),
            'officeHours' => request('hours'),
            'phone' => request('phone'),
            'email' => request('email'),
            'officeAddress' => request('address'),
            'rentDueBy' => request('due')
        ];
        DB::table('landlord')
            ->where('landlordnum', Auth::user()->house_num)
            ->where('id', Auth::user()->id)
            ->update($updateDetails); 
        error_log(request('housing'));
        error_log(request('rent'));
        error_log(request('hours'));
        error_log(request('phone'));
        error_log(request('email'));
        error_log(request('address'));
        error_log(request('due'));
        return redirect( route('pages.settingsPages.informationSettings') );
    }

    public function personalSettings(){
        return view('pages.settingsPages.personalSettings');
    }
    public function storePersonalSettings() {
        $updateDetails = [
            'name' => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'address' => request('address'),
            'calendar' => request('calendar'),
            'house_num' => request('house_num')
        ];
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($updateDetails); 
        error_log(request('name'));
        error_log(request('phone'));
        error_log(request('email'));
        error_log(request('address'));
        error_log(request('calendar'));
        error_log(request('house_num'));
        return redirect()->intended('pages/settingsPages/personalSettings');
    }

    public function socialsSettings(){
        return view('pages.settingsPages.socialsSettings');
    }
    public function storeSocialsSettings() {
        $updateDetails = [
            'instagram' => request('insta'),
            'snapchat' => request('snap'),
            'venmo' => request('venmo'),
            'tiktok' => request('tt')
        ];
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update($updateDetails); 
        error_log(request('insta'));
        error_log(request('snap'));
        error_log(request('venmo'));
        error_log(request('tt'));
        return redirect( route('pages.settingsPages.socialsSettings') );
    }
}
