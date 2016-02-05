<?php

namespace App\Http\Controllers\Auth;

use App\Events\MyEvent;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Redirect;
use Auth;
use Mail;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function redirectGoogleProvider(){

        return Socialite::driver('google')->redirect();
    }

    public function providerGoogleCallback(){

       try {
        $user = Socialite::driver('google')->user();
    }
    catch (GuzzleHttp\Exception\ClientException $e) {
        dd($e->response);
    }
    }

    public function redirectProvider(){

        return Socialite::driver('facebook')->redirect();
    }

    public function ProviderCallback(){

        try{
            $user = Socialite::driver('facebook')->user();
        }catch(Exception $e){
            return redirect('auth/facebook');
        }

        $loginUser = $this->findCreateUser($user);

        Auth::login($loginUser, true);

        return redirect('/');
       
    }

    private function findCreateUser($facebookUser){

        if ($loginUser = User::where('facebook_id', $facebookUser->id)->first()) {
            return $loginUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'avatar_facebook' => $facebookUser->avatar,
            'facebook_id' => $facebookUser->id,
            ]);
    }


    public function redirectToProvider(){

        return Socialite::driver('github')->redirect();
    }


    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/github');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('/');
    }

    private function findOrCreateUser($githubUser)
    {
        if ($authUser = User::where('github_id', $githubUser->id)->first()) {
            return $authUser;
        }

        $msg    = User::create([
                'name' => $githubUser->name, false,
                'avatar' => $githubUser->avatar,
                'email' => $githubUser->email,
                'github_id' => $githubUser->id,
                
        ]);

        $response = Event::fire(new MyEvent($msg));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


   
}
