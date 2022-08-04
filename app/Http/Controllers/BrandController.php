<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller

{
   public function list(){
   $brands = Brand::all();
   return view('backend.brand.brand_list', compact('brands'));
   }

   public function add(){
      $categories = Category::all();
   return view('backend.brand.brand_add', compact('categories'));
   }
   
   public function store(Request $request){
      // dd($request);
      // dd($request->name);
      Brand::create([
         // 'database column name' => $request->input field name
         'name' =>$request->name,
         'description' =>$request->description,
         'photo' =>$request->photo,
         'price' =>$request->price,
         'quantity' =>$request->qty,
         'category'=>$request->category,

      ]);
      return redirect()->route('list.brand');
   }
}
