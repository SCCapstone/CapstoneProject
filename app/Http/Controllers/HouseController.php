<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Contact;
use App\Models\Landlord;
use Illuminate\Support\Facades\DB;


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
    public function chores(){
        return view('pages.chores');
    }
    public function contact(){
        $contacts = Contact::all();
        $landlords = Landlord::all();
        return view('pages.contact', ['contacts' => $contacts], ['landlords' => $landlords]);
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
        DB::table('shopping')->where('id', 1)->update($updateDetails1);
        $updateDetails2 = [
            'done' => request('checkbox2'),
            'item' => request('item2'),
            'urgency' => request('urgency2'),
            'assignee' => request('assignee2')
        ];
        DB::table('shopping')->where('id', 2)->update($updateDetails2);
        $updateDetails3 = [
            'done' => request('checkbox3'),
            'item' => request('item3'),
            'urgency' => request('urgency3'),
            'assignee' => request('assignee3')
        ];
        DB::table('shopping')->where('id', 3)->update($updateDetails3);
        $updateDetails4 = [
            'done' => request('checkbox4'),
            'item' => request('item4'),
            'urgency' => request('urgency4'),
            'assignee' => request('assignee4')
        ];
        DB::table('shopping')->where('id', 4)->update($updateDetails4);
        $updateDetails5 = [
            'done' => request('checkbox5'),
            'item' => request('item5'),
            'urgency' => request('urgency5'),
            'assignee' => request('assignee5')
        ];
        DB::table('shopping')->where('id', 5)->update($updateDetails5);
        $updateDetails6 = [
            'done' => request('checkbox6'),
            'item' => request('item6'),
            'urgency' => request('urgency6'),
            'assignee' => request('assignee6')
        ];
        DB::table('shopping')->where('id', 6)->update($updateDetails6);
        $updateDetails7 = [
            'done' => request('checkbox7'),
            'item' => request('item7'),
            'urgency' => request('urgency7'),
            'assignee' => request('assignee7')
        ];
        DB::table('shopping')->where('id', 7)->update($updateDetails7);
        $updateDetails8 = [
            'done' => request('checkbox8'),
            'item' => request('item8'),
            'urgency' => request('urgency8'),
            'assignee' => request('assignee8')
        ];
        DB::table('shopping')->where('id', 8)->update($updateDetails8);
        $updateDetails9 = [
            'done' => request('checkbox9'),
            'item' => request('item9'),
            'urgency' => request('urgency9'),
            'assignee' => request('assignee9')
        ];
        DB::table('shopping')->where('id', 9)->update($updateDetails9);
        $updateDetails10 = [
            'done' => request('checkbox10'),
            'item' => request('item10'),
            'urgency' => request('urgency10'),
            'assignee' => request('assignee10')
        ];
        DB::table('shopping')->where('id', 10)->update($updateDetails10);
        error_log(request('checkbox1'));
        error_log(request('item1'));
        error_log(request('urgency1'));
        error_log(request('assignee1'));
        return redirect( route('shopping') );
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

    public function storeEmergencySettings() {
        $updateDetails = [
            'emergencyName' => request('emname'),
            'emergencyPhone' => request('emnum'),
            'emergencyRelation' => request('emrel')
        ];
        DB::table('contactinfo')
            ->where('id', 1)
            ->update($updateDetails); //Currently pointing to user 1 for testing, will implement user_id later
        error_log(request('emname'));
        error_log(request('emnum'));
        error_log(request('emrel'));
        return redirect( route('settings.emergency') );
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
            ->where('id', 1)
            ->update($updateDetails); //Currently pointing to user 1 for testing, will implement user_id later
        error_log(request('housing'));
        error_log(request('rent'));
        error_log(request('hours'));
        error_log(request('phone'));
        error_log(request('email'));
        error_log(request('address'));
        error_log(request('due'));
        return redirect( route('settings.information') );
    }

    public function storePersonalSettings() {
        $updateDetails = [
            'firstName' => request('fname'),
            'lastName' => request('lname'),
            'phone' => request('phone'),
            'email' => request('email'),
            'address' => request('address')
        ];
        DB::table('contactinfo')
            ->where('id', 1)
            ->update($updateDetails); //Currently pointing to user 1 for testing, will implement user_id later
        error_log(request('fname'));
        error_log(request('lname'));
        error_log(request('phone'));
        error_log(request('email'));
        error_log(request('address'));
        return redirect( route('settings.personal') );
    }

    public function storeRoommatesSettings() {
        $updateDetails = [
            'roommate1' => request('r1'),
            'roommate2' => request('r2'),
            'roommate3' => request('r3'),
            'roommate4' => request('r4'),
            'inviteRoommate' => request('invite'),
        ];
        DB::table('contactinfo')
            ->where('id', 1)
            ->update($updateDetails); //Currently pointing to user 1 for testing, will implement user_id later
        error_log(request('r1'));
        error_log(request('r2'));
        error_log(request('r3'));
        error_log(request('r4'));
        error_log(request('invite'));
        return redirect( route('settings.roommates') );
    }

    public function storeSocialsSettings() {
        $updateDetails = [
            'instagram' => request('insta'),
            'snapchat' => request('snap'),
            'venmo' => request('venmo'),
            'tiktok' => request('tt')
        ];
        DB::table('contactinfo')
            ->where('id', 1)
            ->update($updateDetails); //Currently pointing to user 1 for testing, will implement user_id later
        error_log(request('insta'));
        error_log(request('snap'));
        error_log(request('venmo'));3
        error_log(request('tt'));
        return redirect( route('settings.socials') );
    }
}
