<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Users extends Controller
{
   public function login(Request $request){
    echo "<pre>";
    print_r($request->all());
   }
}
