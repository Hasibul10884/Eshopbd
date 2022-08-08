<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;




class HomeController extends Controller
{

public function index()
{
    $categories=Category::all();
    $products=Product::all();

    return view('frontend.dashboard.dashboard',compact('categories','products'));
}
}