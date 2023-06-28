<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    public function redirectToProvider($driver = '')
    {
        if ($driver) {
            return Socialite::driver($driver)->redirect();
        }

        return redirect()->route('login');
    }

    public function handleProviderCallback($driver = '')
    {
        if ($driver == 'github') {
            try {
                $user = Socialite::driver($driver)->user();

                $searchUser = User::where('github_id', $user->id)->first();

                if ($searchUser) {
                    auth()->login($searchUser);

                    return redirect()->route('dashboard');
                }

                $githubUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id' => $user->id,
                    'password' => bcrypt('bnve9q*gb09obvnr.o9nb0G'),
                    'avatar' => $user->avatar,
                    'github_username' => $user->nickname,
                ]);

                auth()->login($githubUser);

                return redirect()->route('dashboard');
            } catch (Exception $th) {
                Log::error('GitHub Login Error', [ $th->getMessage() ]);

                return redirect()->route('login');
            }
        } else if ($driver == 'twitter') {
            try {
                $user = Socialite::driver($driver)->user();

                $searchUser = User::where('twitter_id', $user->id)->first();

                if ($searchUser) {
                    auth()->login($searchUser);

                    return redirect()->route('dashboard');
                }

                $twitterUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id' => $user->id,
                    'password' => bcrypt('bnve9q*gb09obvnr.o9nb0G'),
                    'avatar' => $user->attributes['avatar_original'],
                    'twitter_username' => $user->nickname,
                ]);

                auth()->login($twitterUser);

                return redirect()->route('dashboard');

            } catch (Exception $th) {
                Log::error('Twitter Login Error', [ $th->getMessage() ]);

                return redirect()->route('login');
            }
        }
    }
}
