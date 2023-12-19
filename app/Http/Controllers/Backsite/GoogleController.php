<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
// use Laravel\

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            if(empty($user)){
                return redirect()->route('backsite.login');
            }
            // dd($user);

            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);

                return redirect()->route('backsite.berita.index');
            } else {
                $newUser = User::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'name' => $user->name,
                        'google_id' => $user->id,
                        'password' => Hash::make('password'),
                        'id_role' => 1,
                    ],
                );
                // User::insert($newUser);
                Auth::login($newUser);

                return redirect()->intended('/backsite/berita');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
