<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotificationController extends Controller
{
    public function notification(){
        //update notification count
        $uid = Auth::user()->uid;
        $count = CountNotification::findorFail($uid);
        $count->count = ($count->count)+1;
        $count->save();
    }
}
