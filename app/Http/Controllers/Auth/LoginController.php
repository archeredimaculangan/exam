<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

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

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'Please check your login credentials.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }

    public function factorial()
    {
        return view('factorial');
    }
}   
