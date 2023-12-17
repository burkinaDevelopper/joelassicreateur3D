<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Newspaper;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotificationMarketing;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified','admin']);
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function notificationMarketing(){
        return view('admin.notification');
    }
    public function marketingStore(){
        request()->validate([
            'sujet'=>['required'],
            'salutation'=>['required'],
            'message'=>['required'],
        ]);
        $sujet=request('sujet');
        $salutation=request('salutation');
        $message=request('message');
        $users=Newspaper::get();
        Notification::send($users, new NotificationMarketing($sujet,$salutation,$message));
        return back()->withSuccess('Email envoiyer a tout les utilisateur');
    }
}
