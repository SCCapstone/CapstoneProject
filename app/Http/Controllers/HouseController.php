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

    /*
    Repeat code here
    
    public function signin(){
        return view('pages.sign-in');
    }
    public function trySignIn(Request $req){
        $userInfo = [
            'email' => request('email'),
            'password' => request('password')
        ];
        $finduserU = User::where('email', $userInfo['email'])->first();
        if($finduserU){
            Auth::login($finduserU);
            return redirect()->intended('/pages/room-num');
        }else{
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
    public function signup(){
        return view('pages.sign-up');
    }
    public function register(){
        return view('auth.register');
    }
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    } */
    /*
    public function login(){
        return redirect()->intended('/pages/room-num');
    }
    */
    public function logout(){
        Auth::logout(Auth::user());
        return redirect()->intended('/');
    }
    public function trySignIn(Request $req){
        $userInfo = [
            'email' => request('email'),
            'password' => request('password')
        ];
        $finduserU = User::where('email', $userInfo['email'])->first();
        if($finduserU){
            Auth::login($finduserU);
            return redirect()->intended('/pages/room-num');
        }else{
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
    
    public function roomnum(){
        return view('pages.room-num');
    }
    public function assignRoom(Request $req){
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
        return view('pages.chores');
    }
    public function storeChores(){
        $updateDetails1 = [
            'done' => request('checkbox1'),
            'item' => request('item1'),
            'urgency' => request('urgency1'),
            'assignee' => request('assignee1')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 1)->update($updateDetails1);
        $updateDetails2 = [
            'done' => request('checkbox2'),
            'item' => request('item2'),
            'urgency' => request('urgency2'),
            'assignee' => request('assignee2')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 2)->update($updateDetails2);
        $updateDetails3 = [
            'done' => request('checkbox3'),
            'item' => request('item3'),
            'urgency' => request('urgency3'),
            'assignee' => request('assignee3')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 3)->update($updateDetails3);
        $updateDetails4 = [
            'done' => request('checkbox4'),
            'item' => request('item4'),
            'urgency' => request('urgency4'),
            'assignee' => request('assignee4')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 4)->update($updateDetails4);
        $updateDetails5 = [
            'done' => request('checkbox5'),
            'item' => request('item5'),
            'urgency' => request('urgency5'),
            'assignee' => request('assignee5')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 5)->update($updateDetails5);
        $updateDetails6 = [
            'done' => request('checkbox6'),
            'item' => request('item6'),
            'urgency' => request('urgency6'),
            'assignee' => request('assignee6')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 6)->update($updateDetails6);
        $updateDetails7 = [
            'done' => request('checkbox7'),
            'item' => request('item7'),
            'urgency' => request('urgency7'),
            'assignee' => request('assignee7')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 7)->update($updateDetails7);
        $updateDetails8 = [
            'done' => request('checkbox8'),
            'item' => request('item8'),
            'urgency' => request('urgency8'),
            'assignee' => request('assignee8')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 8)->update($updateDetails8);
        $updateDetails9 = [
            'done' => request('checkbox9'),
            'item' => request('item9'),
            'urgency' => request('urgency9'),
            'assignee' => request('assignee9')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 9)->update($updateDetails9);
        $updateDetails10 = [
            'done' => request('checkbox10'),
            'item' => request('item10'),
            'urgency' => request('urgency10'),
            'assignee' => request('assignee10')
        ];
        DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', 10)->update($updateDetails10);
        error_log(request('checkbox1'));
        error_log(request('item1'));
        error_log(request('urgency1'));
        error_log(request('assignee1'));
        return redirect()->intended('/pages/chores');
    }
    public function contact(){
        $landlords = DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->first();
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)
            ->whereNotIn('id', DB::table('users')->select('id')->where('id', Auth::user()->id))->get();
        return view('pages.contact', ['landlords' => $landlords], ['users' => $users]);
    }
    public function shopping(){
        return view('pages.shopping');
    }
    public function storeShoppingTable(){
        $updateDetails1 = [
            'done' => request('checkbox1'),
            'item' => request('item1'),
            'urgency' => request('urgency1'),
            'assignee' => request('assignee1')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 1)->update($updateDetails1);
        $updateDetails2 = [
            'done' => request('checkbox2'),
            'item' => request('item2'),
            'urgency' => request('urgency2'),
            'assignee' => request('assignee2')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 2)->update($updateDetails2);
        $updateDetails3 = [
            'done' => request('checkbox3'),
            'item' => request('item3'),
            'urgency' => request('urgency3'),
            'assignee' => request('assignee3')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 3)->update($updateDetails3);
        $updateDetails4 = [
            'done' => request('checkbox4'),
            'item' => request('item4'),
            'urgency' => request('urgency4'),
            'assignee' => request('assignee4')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 4)->update($updateDetails4);
        $updateDetails5 = [
            'done' => request('checkbox5'),
            'item' => request('item5'),
            'urgency' => request('urgency5'),
            'assignee' => request('assignee5')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 5)->update($updateDetails5);
        $updateDetails6 = [
            'done' => request('checkbox6'),
            'item' => request('item6'),
            'urgency' => request('urgency6'),
            'assignee' => request('assignee6')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 6)->update($updateDetails6);
        $updateDetails7 = [
            'done' => request('checkbox7'),
            'item' => request('item7'),
            'urgency' => request('urgency7'),
            'assignee' => request('assignee7')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 7)->update($updateDetails7);
        $updateDetails8 = [
            'done' => request('checkbox8'),
            'item' => request('item8'),
            'urgency' => request('urgency8'),
            'assignee' => request('assignee8')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 8)->update($updateDetails8);
        $updateDetails9 = [
            'done' => request('checkbox9'),
            'item' => request('item9'),
            'urgency' => request('urgency9'),
            'assignee' => request('assignee9')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 9)->update($updateDetails9);
        $updateDetails10 = [
            'done' => request('checkbox10'),
            'item' => request('item10'),
            'urgency' => request('urgency10'),
            'assignee' => request('assignee10')
        ];
        DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 10)->update($updateDetails10);
        error_log(request('checkbox1'));
        error_log(request('item1'));
        error_log(request('urgency1'));
        error_log(request('assignee1'));
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
