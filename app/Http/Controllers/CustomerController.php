<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class CustomerController extends Controller
{
    public function registration()
    {
       return view('frontend.registration');
    }

    public function doRegistration(Request $request)
    {

// dd($request->all());
        User::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function doLogin(Request $request)
    {

        $check=Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {

        Auth::logout();

        return redirect()->route('dashboard');

    }
}

