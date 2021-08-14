<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\User;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.index');
    }



public function updatePic($id){
    $user = User::find($id);
  $data = compact('user');
    return view('admin.upload-pic')->with($data);
}



function updateAdminPicture(Request $request){
    $request->validate([
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $user = User::find($request['id']);
    $imageName = time().'.'.$request->file->extension();
    $request->file->move(public_path('uploads'), $imageName);

    FacadesFile::delete(''.public_path('uploads').'/'.$user->profile_pic);
    $user->profile_pic =$imageName;
    $user->save();

    return redirect('/admin/profile')->with('success','You have successfully upload image.')->with('image',$imageName); ;
}


public function resetPassword($id){
    $user = User::find($id);
    $data = compact('user');
    return view('admin.reset-password')->with($data);
}


public function updateAdminPassword(Request $request){
    $user = User::find($request['id']);
    $user->password=md5($request['password']);
    $user->save();
    return redirect('/admin/profile');
}

    public function adminProfile(Request $request){
        $request->session()->put('admin', 'admin@gmail.com');
        $value = session('admin');
        $user =User::all()->where('email', $value)->first();
        $data = compact('user');
        return view('admin.admin-profile')->with($data);
    }

    public function editProfile($id){
        $user = User::find($id);
        $data = compact('user');
        return view('admin.update-profile')->with($data);
    }



public function updateAdminProfile(Request $request){
    $user = User::find($request['id']);
    $user->name=$request['name'];
    $user->email=$request['email'];
    $user->save();
    return redirect('/admin/profile');
}


    public function allBooks(){
        $books = Books::all();
        $data = compact('books');
        return view('admin.all-books')->with($data);
    }


    public function deleteBook($id){
        $books = Books::find($id);
        if (!is_null($books)) {
            $books->delete();
            return redirect('/admin/allBooks');
        } else {
            return redirect('/admin/allBooks');
        }
    }

    public function bookStatus($id){
        $books =  Books::find($id);
        if (!is_null($books)) {
            $allData =  $books->toArray();
        $status = $allData['status'];
            if($status==0){
                $books->status = 1;
                $books->save();
                return redirect('/admin/allBooks');
            }else
            if($status==1){
                $books->status =0;
                $books->save();
                return redirect('/admin/allBooks');
            }else{
            return redirect('/admin/allBooks');
            }
        } else {
            return redirect('/admin/allBooks');
        }
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
