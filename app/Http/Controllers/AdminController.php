<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard(){
        return view('admin.index');
    }
    public function allBooks(){
        return view('admin.all-books');
    }
    public function exhibitors(){
        return view('admin.exhibitors');
    }
    public function addExhibitors(){
        return view('admin.add-exhibitor');
    }
    public function login(){
        return view('admin.auth-login');
    }
    // public function store(Request $request){
    //     echo "<pre>";

    //     print_r($request->all());
    // }
}
