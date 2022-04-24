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


class HouseController extends Controller
{

    /* AUTHENTICATION AND ACCOUNT HANDLING */

    //built to potentially override the Auth::Login method
    public function login()
    {
        return redirect()->intended('/pages/room-num');
    }
    //Auth::logout for the currently logged in user
    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect()->intended('/');
    }
    //creates an account using local method if one is not built or logs in existing user
    //no verification as this is for testing purposes only
    public function trySignIn(Request $req)
    {
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
    //returns room-num page
    public function roomnum()
    {
        return view('pages.room-num');
    }
    //post method from room-num assigns room num to user and builds landlord, shopping, and chores table
    public function assignRoom(Request $req)
    {
        $roomNum = request('roomnum');
        $list_size = 10;
        $id = Auth::user()->id;
        $affected = DB::update('UPDATE users SET house_num=? WHERE id=?', [$roomNum, $id]);

        //create landlord, shopping and chores table to match the logged in user and house number
        $findLandlord = Landlord::where('landlordnum', $roomNum)->first();
        if (!$findLandlord) {
            $newLandlord = Landlord::create(['landlordnum' => $roomNum]);

            for($i=1; $i<11; $i++){
                $newShoppingList = Shopping::create(['list_size' => $list_size, 'local_id' => $i, 'house_num' => $roomNum]);
                $newChoreList = Chores::create(['list_size' => $list_size, 'local_id' => $i, 'house_num' => $roomNum]);
            }
        }
        return redirect()->intended('/pages/home-page');
    }

    /* MAIN PAGES */

    //home page return
    public function homepage()
    {
        return view('pages.home-page');
    }
    //index page return
    public function index()
    {
        return view('pages.index');
    }
    //calendar page return
    public function calendar()
    {
        return view('pages.calendar');
    }
    //chores page return (returns table of users with the logged in user's house_num)
    public function chores()
    {
        if(Auth::user()->house_num == null){
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('You must declare a room number before you can view this page.');
                window.location.href='/pages/room-num';
                </script>");
        }
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)->get();
        return view('pages.chores', ['users' => $users]);
    }
    //stores chores including status, item, urgency, & assignee 
    //determines whether to add/remove/keep current amount of rows by list_size variable and add/remove drop down menu
    public function storeChores()
    {

        $choreBox = 1;
        $checkbox = "checkbox";
        $item = "item";
        $urgency = "urgency";
        $assignee = "assignee";
        $extendChores = request('extendChores');
        $boxLimit = DB::table('chores')->where('house_num', Auth::user()->house_num)->value('list_size');
            
        //if user wants to add a row
        if($extendChores==1){
            $boxLimit = DB::table('chores')->where('house_num', Auth::user()->house_num)->value('list_size') + 1;
            for($i=$boxLimit; $i<$boxLimit+1; $i++){
                $newChoreList = Chores::create(['list_size' => $boxLimit, 'local_id' => $i, 'house_num' => Auth::user()->house_num]);
            }
        }else if($extendChores==2){
            //if user wants to remove a row
            $boxLimit = DB::table('chores')->where('house_num', Auth::user()->house_num)->value('list_size') - 1;
            for($i=$boxLimit+1; $i>$boxLimit; $i--){
                //$newChoreList = Chores::create(['list_size' => $boxLimit, 'local_id' => $i, 'house_num' => Auth::user()->house_num]);
                DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->delete();
            }
        }

        //store/update new row values
        for ($i = 1; $i < $boxLimit+1; $i++) {
            if (request($checkbox . strval($i)) == true) {
                $updateDetails = [
                    'item' => null,
                    'urgency' => null,
                    'assignee' => null,
                    'list_size' => $boxLimit
                ];
            } else {
                $updateDetails = [
                    'item' => request($item.strval($i)),
                    'urgency' => request($urgency.strval($i)),
                    'assignee' => request($assignee.strval($i)),
                    'list_size' => $boxLimit
                ];
            }
            DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->update($updateDetails);
        }

        return redirect()->intended('/pages/chores');
    }
    //returns contact page with landlord and users table pre-sorted to users with matching house_num of logged in user
    public function contact()
    {
        if(Auth::user()->house_num == null){
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('You must declare a room number before you can view this page.');
                window.location.href='/pages/room-num';
                </script>");
        }
        $landlords = DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->first();
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)
            ->whereNotIn('id', DB::table('users')->select('id')->where('id', Auth::user()->id))->get();
        return view('pages.contact', ['landlords' => $landlords], ['users' => $users]);
    }
    //shopping page return (returns table of users with the logged in user's house_num)
    public function shopping()
    {
        if(Auth::user()->house_num == null){
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('You must declare a room number before you can view this page.');
                window.location.href='/pages/room-num';
                </script>");
        }
        $users = DB::table('users')->where('house_num', Auth::user()->house_num)->get();
        return view('pages.shopping', ['users' => $users]);
    }
    //stores shopping including status, item, urgency, & assignee 
    //determines whether to add/remove/keep current amount of rows by list_size variable and add/remove drop down menu
    public function storeShoppingTable(){
 
        /*
        $boxLimit = 11;
        $choreBox = 1;
        $checkbox = "checkbox";
        $item = "item";
        $urgency = "urgency";
        $assignee = "assignee";

        for ($i = 1; $i < $boxLimit; $i++) {
            $updateDetails = [
                'done' => request($checkbox . strval($i)),
                'item' => request($item . strval($i)),
                'urgency' => request($urgency . strval($i)),
                'assignee' => request($assignee . strval($i))
            ];
            DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->update($updateDetails);
        }
        */
        
        $choreBox = 1;
        $checkbox = "checkbox";
        $item = "item";
        $urgency = "urgency";
        $assignee = "assignee";
        $extendShopping = request('extendShopping');
        $boxLimit = DB::table('shopping')->where('house_num', Auth::user()->house_num)->value('list_size');
        
        //if user wants to add a row
        if($extendShopping==1){
            $boxLimit = DB::table('shopping')->where('house_num', Auth::user()->house_num)->value('list_size') + 1;
            for($i=$boxLimit; $i<$boxLimit+1; $i++){
                $newChoreList = Shopping::create(['list_size' => $boxLimit, 'local_id' => $i, 'house_num' => Auth::user()->house_num]);
            }
        }else if($extendShopping==2){
            //if user wants to remove a row
            $boxLimit = DB::table('shopping')->where('house_num', Auth::user()->house_num)->value('list_size') - 1;
            for($i=$boxLimit+1; $i>$boxLimit; $i--){
                $newShoppingList = Shopping::create(['list_size' => $boxLimit, 'local_id' => $i, 'house_num' => Auth::user()->house_num]);
                DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->delete();
            }
        }

        //store current values
        for ($i = 1; $i < $boxLimit+1; $i++) {
            if(request($checkbox.strval($i))==true){
                $updateDetails = [
                    'item' => null,
                    'urgency' => null,
                    'assignee' => null,
                    'list_size' => $boxLimit
                ];
            } else{
                $updateDetails = [
                    'item' => request($item.strval($i)),
                    'urgency' => request($urgency.strval($i)),
                    'assignee' => request($assignee.strval($i)),
                    'list_size' => $boxLimit
                ];
            }
            DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->update($updateDetails);
        }
        
        return redirect()->intended('/pages/shopping');
    }

    /* SETTINGS */

    //returns emergencySettings page
    public function emergencySettings()
    {
        //return redirect()->intended('/pages/settingsPages/emergencySettings');
        return view('pages.settingsPages.emergencySettings');
    }
    //stores emergencySettings into users table (emergencyName, emergencyPhone, emergencyRelation)
    public function storeEmergencySettings()
    {
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
        
        return redirect()->intended('/pages/settingsPages/emergencySettings');
        //return redirect(route('pages.settingsPages.emergencySettings'));
    }

    //returns informationSettings page along with "$landlords" variable filled with landlord table
    public function informationSettings()
    {
        $landlords = Landlord::all();

        return view('pages.settingsPages.informationSettings', ['landlords' => $landlords]);
    }
    //stores landlord information from informationSettings page data
    public function storeInformationSettings()
    {
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
            ->update($updateDetails);
        error_log(request('housing'));
        error_log(request('rent'));
        error_log(request('hours'));
        error_log(request('phone'));
        error_log(request('email'));
        error_log(request('address'));
        error_log(request('due'));

        return redirect()->intended('/pages/settingsPages/informationSettings');
        //return redirect(route('pages.settingsPages.informationSettings'));
    }
    //returns personalSettings page
    public function personalSettings()
    {
        return view('pages.settingsPages.personalSettings');
    }
    //stores settings values into users table from personalSettings page
    public function storePersonalSettings()
    {
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
        return redirect()->intended('/pages/settingsPages/personalSettings');
    }
    //returns socialSettings page
    public function socialsSettings()
    {
        return view('/pages/settingsPages/socialsSettings');
    }
    //stores social information in users table from socialSettings page
    public function storeSocialsSettings()
    {
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
        return redirect()->intended('/pages/settingsPages/socialsSettings');
    }
}
