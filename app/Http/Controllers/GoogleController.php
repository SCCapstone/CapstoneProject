<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
            
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/pages/home-page');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                DB::table('users')
                    ->update($newUser);

                /* $updateDetails = [
                    'emergencyName' => request('emname'),
                    'emergencyPhone' => request('emnum'),
                    'emergencyRelation' => request('emrel')
                ];
                DB::table('contactinfo')
                    ->where('id', 1)
                    ->update($updateDetails); */
      
                Auth::login($newUser);
      
                return redirect()->intended('/pages/home-page');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}