<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



//frontend Dashboard
Route::get('/', [HomeController::class,'index'])->name('dashboard');


//customer login
Route::get('/registration',[CustomerController::class,'registration'])->name('registration');
Route::post('/do-registration',[CustomerController::class,'doRegistration'])->name('registration.do');
Route::get('/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/do-login',[CustomerController::class,'doLogin'])->name('login.do');
Route::get('/logout',[CustomerController::class,'logout'])->name('frontend.logout');


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

