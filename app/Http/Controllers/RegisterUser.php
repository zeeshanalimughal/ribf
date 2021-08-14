<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailToExibitors;
use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\ExhibiratorRegisteredNotification;
class RegisterUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required",
        ]);
        $user  = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = md5($request['password']);
        $user->save();
        // Notification::send($user, new ExhibiratorRegisteredNotification($request['email']));
        SendMailToExibitors::dispatchAfterResponse($user);
        // return redirect()->route('sendEmail');
            return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public  function view()
    {
        $user = User::all();
        $data = compact('user');
        return view('admin.exhibitors')->with($data);
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user  = User::find($id);
        if (is_null($user)) {
            return redirect('/admin/exhibitors');
        } else {
            $data = compact('user');
            return view('admin.edit-exhibitor')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $id = $request['id'];
        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = md5($request['email']);
        $user->password = md5($request['password']);
        $user->save();
        return redirect('/admin/exhibitors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =  User::find($id);
        if (!is_null($user)) {
            $user->delete();
            return redirect('/admin/exhibitors');
        } else {
            return redirect('/admin/exhibitors');
        }
    }

    public function status($id){
        $user =  User::find($id);
        if (!is_null($user)) {
            $allData =  $user->toArray();
        $status = $allData['status'];
            if($status==0){
                $user->status = 1;
                $user->save();
                return redirect('/admin/exhibitors');
            }else
            if($status==1){
                $user->status =0;
                $user->save();
                return redirect('/admin/exhibitors');
            }else{
            return redirect('/admin/exhibitors');
            }
        } else {
            return redirect('/admin/exhibitors');
        }
    }
}
