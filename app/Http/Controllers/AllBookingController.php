<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Notification;

use Auth;

class AllBookingController extends Controller
{
    public function show(){
        $data = Notification::where('uid',Auth::user()->uid)->get();
        return view('pages.data_table',['user' => $data]);
    }
}
