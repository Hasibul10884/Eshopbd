<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;




class HomeController extends Controller
{

public function index()
{
    $categories=Category::all();
    $products=Product::all();

    return view('frontend.dashboard.dashboard',compact('categories','products'));
}

public function registration()
    {
       return view('frontend.registration');
    }

    public function doRegistration(Request $request)
    {


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        return redirect()->route('dashboard');
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
