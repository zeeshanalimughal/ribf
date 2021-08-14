<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailToExibitors;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     function template(){
         return view('index');
     }
    public function sendEmailNotification(Request $request)
    {

        $users = User::all();
        $details = [
            "greeting"=>"Hello from virturnetz",
            "body"=>"Thank you for joining us",
            "actionText"=>"Please complete your registration process",
            "actionUrl"=>"/",
            "lastWords"=>"Thank you for subscribing us",
           ];

           Notification::send($this->users, new ExhibiratorRegisteredNotification($details));
        
        return redirect('/admin/addExhibitors');

    }
}
