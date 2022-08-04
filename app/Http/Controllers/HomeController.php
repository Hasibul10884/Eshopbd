<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
    return view('frontend.master');
}

public function viewDashboard(){
    return view('frontend.dashboard.dashboard');
}
}
