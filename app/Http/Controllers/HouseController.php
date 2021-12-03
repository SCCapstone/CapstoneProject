<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Landlord;

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
        $contacts = Contact::all();
        $landlords = Landlord::all();
        return view('pages.contact', ['contacts' => $contacts], ['landlords' => $landlords]);
    }
    public function shopping(){
        return view('pages.shopping');
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
        error_log(request('venmo'));
        error_log(request('tt'));
        return redirect( route('settings.socials') );
    }
}
