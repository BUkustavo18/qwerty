<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Email;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //validate
        $fields = $request->validate([
            'name' => ['required', 'max:225'],
            'email' => ['required', 'max:225', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        //register
        $user = User::create($fields);


        //login
        Auth::login($user);
        //redirect
        return redirect()->route('home');
        
    }

    //login User

    public function login(Request $request) {
        //validate
        $fields = $request->validate([
            'email' => ['required', 'max:225', 'email', ],
            'password' => ['required'],
        ]);

        //try to log in

        

        if (Auth::attempt($fields, $request->remember)) {
             return redirect()->intended('dashboard');
        } else {
        
            return back()->withErrors([
                'failed'=> 'The provided credential
                 do not match our records.'
            ]);
        }
        

        
    }

    //logout user

    public function logout(Request $request) {
        //logout user
        Auth::logout();

        //invalidate user's session
        $request->session()->invalidate();

        //regenerate CSRF token
        $request->session()->regenerateToken();

        //redirect to landing page
        return redirect()->route('home');


    }
}
