<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class AuthController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        $validatedInput = request()->validate([
            "name"=>'min:3|max:20|required',
            "email"=>'required|email|unique:users,email',
            "password"=>'required|confirmed'
        ]);

       User::create($validatedInput);
       return redirect()->route('contacts.index')->with('message', "New user is created");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('auth.register');
    }

    public function showLogin(){
        return view('auth.login');
    }
    public function login()
    {
        $validatedInput = request()->validate([
            "email" => 'required|email',
            "password" => 'required'
        ]);

        if(auth()->attempt($validatedInput)){
            request()->session()->regenerate();
            return redirect()->route('contacts.index');
        }

        return redirect()->route('login')->withErrors(['password', "email or password is incorrect"]);
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->invalidate();
        return redirect()->route('login');
    }
}
