<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\BulkEmailSenderNotification;
use Notification;

class BulkEmailController extends Controller
{

    public function sendEmailNotification(Request $request)
    {
        $users = User::all();

           Notification::send($users, new BulkEmailSenderNotification($users));

        return redirect('/admin/dashboard');

    }
}
