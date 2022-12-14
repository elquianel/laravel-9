<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GitHubController extends Controller
{
    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        try {

            $user = Socialite::driver('github')->user();

            $userExisted = User::where('github_id', $user->id)->first();

            if( $userExisted ) {

                Auth::login($userExisted);

                return redirect()->route('dashboard');

            }else {

            $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make($user->id),
                    'github_id' => $user->id,
                    'auth_type' => 'github',
                ]);

            Auth::login($newUser);

          return redirect()->route('dashboard');
        }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    private function createOrUpdateUser($data, $provider){
        $user = User::where('email', $data->email)->first();

        if($user){
           $user->update([
            'provider'=>$provider,
            'provider_id'=>$data->id,
            'avatar'=>$data->avatar
           ]);
        }else{
            $user= User::create([
                'name'=>$provider,
                'email'=>$data->id,
                'provider'=>$data->avatar,
            ]);
        }

        Auth::login($user);
    }


    // CONST DRIVER_TYPE = 'github';

    // public function handleGithubRedirect()
    // {
    //     return Socialite::driver(static::DRIVER_TYPE)->redirect();
    // }

    // public function handleGithubCallback()
    // {
    //     try {

    //         $user = Socialite::driver(static::DRIVER_TYPE)->user();

    //         $userExisted = User::where('oauth_id', $user->id)->where('oauth_type', static::DRIVER_TYPE)->first();

    //         if( $userExisted ) {

    //             Auth::login($userExisted);

    //             return redirect()->route('dashboard');

    //         }else {

    //             $newUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 'oauth_id' => $user->id,
    //                 'oauth_type' => static::DRIVER_TYPE,
    //                 'password' => Hash::make($user->id)
    //             ]);

    //             AddingTeam::dispatch($newUser);

    //             $newUser->switchTeam($team = $newUser->ownedTeams()->create([
    //                 'name' => $newUser->name . "'s Team",
    //                 'personal_team' => false
    //             ]));

    //             $newUser->update([
    //                 'current_team_id' => $newUser->id
    //             ]);

    //             Auth::login($newUser);

    //             return redirect()->route('dashboard');
    //         }


    //     } catch (Exception $e) {
    //         dd($e);
    //     }

    // }
}
