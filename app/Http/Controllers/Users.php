<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\User;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Validation\Rules\Password;

class Users extends Controller
{

public function logoutUser(){
    session()->forget('user');
    return redirect('/');
}

public function userLogin(){
    return view('user.content.user-login');
}

public function loginExhibitor(Request $request)
{
    $request->validate([
        'email'=>"required|email",
        'password'=>"required"
    ]);
    $user = User::all()
    ->where("email",trim($request->input('email')))
    ->where("password",trim(md5($request->input('password'))))
    ->where("status",0)
    ->toArray();

   if(sizeof($user)>0){
       $request->session()->put("user",trim($request->input('email')));
       return redirect('/user');
   }else{
    $request->session()->put("error","Access Denied / Account dose not exists | Or Your Accoutn is no Activate");
    return redirect('/');
   }

}







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
        'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'copyOfBook'=>'required|mimes:pdf|max:20000',
    ]);
$book =new  Books;
// $user = User::all()->where('email',session('user'));
// dd($user);

$coverImageName="";
if($request->has('file')) {
    $image = $request->file('file');
    $coverImageName = 'exhibitor'.time().'.'.$image->getClientOriginalName();
    $image->move(public_path('uploads'), $coverImageName);
}

if($request->has('copyOfBook')) {
    $image = $request->file('copyOfBook');
    $bookFileName = 'exhibitor'.time().'.'.$image->getClientOriginalName();
    $image->move(public_path('uploads'), $bookFileName);
}

$book->exhibitorEmail = session('user');
$book->bookTitle = $request->input(trim('bookTitle'));
$book->authorName = $request->input(trim('authorName'));
$book->authorNationality = $request->input(trim('authorNationality'));
$book->bookLanguage = $request->input(trim('bookLanguage'));
$book->bookDimention = $request->input(trim('bookDimension'));
$book->price = $request->input(trim('price'));
$book->sellingPrice = $request->input(trim('sellingPrice'));
$book->noOfCopies = $request->input(trim('numberCopies'));
$book->issueDate = $request->input('issueDate');
$book->coverPhoto = $coverImageName;
$book->copyOfBook =$bookFileName;
$book->publisherName = $request->input(trim('publisherName'));
$book->typeOfBook = $request->input(trim('typeOfBook'));

$book->save();
return redirect('/');
  }
}
