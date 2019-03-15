<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
   
    protected $redirectTo = '/client';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     session()->flash('failed','Success');
    //     return redirect('login');
    // }

    protected function sendLoginResponse(Request $request)
    {
        if(Auth::user()->hasRole('client')){

            return redirect('/client');

        }
        else if(Auth::user()->hasRole('doctor')){

            return redirect('/doctor');
        }
    }   
}
