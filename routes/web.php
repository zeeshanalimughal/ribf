<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exhibitor;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterUser;
use App\Models\User;

// use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[Exhibitor::class,'index']);
// Route::post('/',[Exhibitor::class,'register']);

Auth::routes();
Route::get('/',[AdminController::class,'login']);
Route::post('/',[User::class,'login']);


// Route::get('/admin',[AdminController::class,'dashboard'])->name();
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/allBooks',[AdminController::class,'allBooks'])->name('admin.allBooks');
// Route::get('/admin/exhibitors',[AdminController::class,'exhibitors'])->name('admin.exhibitors');
Route::get('/admin/addExhibitors',[AdminController::class,'addExhibitors'])->name('admin.addExhibitors');


Route::post('/admin/addExhibitors',[RegisterUser::class,'create']);
Route::get('/admin/exhibitors',[RegisterUser::class,'view']);
// Route::get('/admin/exhibitors/edit{id}',[RegisterUser::class,'edit']);

Route::get('/admin/edit/{id}',[RegisterUser::class,'edit']);


// Route::get('/',[AdminController::class,'login']);
// Route::post('/admin/login',[AdminController::class,'store']);

