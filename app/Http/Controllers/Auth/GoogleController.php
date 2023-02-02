<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

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
            
                    return redirect()->intended('user/home');
             
                }else{
                    $newUser = User::updateOrCreate(['email' => $user->email],[
                            'name' => $user->name,
                            'google_id'=> $user->id,
                            'password' => encrypt('123456dummy'),
                            'type' => 'user',
                            'email_verified_at' => date('Y-m-d H:i:s'),
                        ]);
             
                    Auth::login($newUser);
            
                    return redirect()->intended('user/home');
                }
            
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }
}
