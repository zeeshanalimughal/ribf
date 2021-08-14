<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
class Users extends Controller
{

      public function index(){
      return view('user.content.index');
  }

  public function exhibitor(Request $request){
    $request->validate([
        'bookTitle'=>'required',
        'authorName'=>'required',
        'authorNationality'=>'required',
        'bookLanguage'=>'required',
        'bookDimension'=>'required',
        'price'=>'required',
        'sellingPrice'=>'required',
        'numberCopies'=>'required',
        'issueDate'=>'date',
        'publisherName'=>'required',
        'typeOfBook'=>'required',
        'coverPhoto'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'copyOfBook'=>'required|mimes:pdf|max:10000',
    ]);

    dd($request->all());
  }
}
