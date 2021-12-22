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

     ///pas udah mulai pencet tombol google maka function ini akan dijalankan
     //=====>>
    public function loginWithGoogle()
    {


        //kalau udah bisa masuk kesini dengan try catch condition 
        try {

            //ambil library socialite driver google untuk mendapatkan google account varibale
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();
            
            //pre condition dimana jika user telah masuk maka redirect home
            if($user){
                Auth::login($user);
            }

            else{
                //sebaliknya jika kondisi user belum tersedia, maka create function dijalankan
                $createUser = User::create([
                    'name' => $googleUser->name,
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
