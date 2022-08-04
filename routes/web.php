<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


//frontend Dashboard
Route::get('/', [HomeController::class,'index'])->name('dashboard');
Route::get('/dashboard', [HomeController::class,'viewDashboard'])->name('dashboard1');


// backend Dashboard
Route::get('/admin', [DashboardController::class,'index'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class,'viewDashboard'])->name('dashboard1');

//Log In admin
Route::get('/admin/login',[DashboardController::class,'login'])->name('login');
Route::post('/admin/do-login',[DashboardController::class,'doLogin'])->name('admin.login');
Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

//product
Route::get('/product/add',[ProductController::class,'add'])->name('add.product');
Route::get('/product/list',[ProductController::class,'list'])->name('list.product');
Route::post('/product/store',[ProductController::class, 'store'])->name('product.store');

//category
Route::get('/category/list',[CategoryController::class,'list'])->name('list.category');
Route::get('/category/add',[CategoryController::class,'add'])->name('add.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

//brand
Route::get('/brand/list',[BrandController::class,'list'])->name('list.brand');
Route::get('/brand/add',[BrandController::class,'add'])->name('add.brand');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');

Route::get('/abc', function(){
    return view('backend.dashboard.dashboard');
});