<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'],'password' => $input['password']))){

            if(Auth::user()->is_enterprise == 1){

                return redirect()->route('entreprise.home');
            }else{

                return redirect()->route('home');
            }
        }else{
                // return back()->with('error','le mail et le mot de passe ne sont pas correcte.');
                return back()->withErrors(
                    [
                        'email' => 'E-mail incorrecte !',
                        'password' => 'Mot de passe incorrect !',
                    ]
                );
        }
    }
}
