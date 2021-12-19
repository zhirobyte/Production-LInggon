<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;


class SocialiteAuthController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
        
    }

    /**
     * Google login authentication
     *
     * @return void
     */
    public function loginWithGoogle()
    {

        try {

            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if($user){
                Auth::login($user);
                Auth::loginUsingId($user->id);
            }

            else{
                $createUser = User::create([
                    'username' => $googleUser->username,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => encrypt('test@123')
                ]);

                Auth::login($createUser);
               
            }
            return redirect('/home');
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}

