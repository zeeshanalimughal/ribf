<?php

namespace App\Http\Controllers;
use App\Jobs\SendMailToExibitors;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\ExhibiratorRegisteredNotification;
use Notification;
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

function bulkEmail(){

    return view('admin.bulkEmail');
}


     function template(){
         return view('index');
     }
    public function sendEmailNotification(Request $request)
    {

        $users = User::all();
        $details = [
            "greeting"=>"Hello from virturnetz",
            "body"=>"Thank you for joining us",
           ];
           Notification::send($users, new ExhibiratorRegisteredNotification($details));

        return redirect('/admin/dashboard');

    }
}
