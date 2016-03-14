<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\CountNotification;
use App\Notification;
use Auth;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = CountNotification::findorFail(Auth::user()->uid);
        $notice  =  Notification::where('uid', Auth::user()->uid)
                    ->orderBy('id', 'desc')
                    ->take($count->count)
                    ->get();
        return $count->count;
        //return view('templates.first', ['count' => $count->count, 'name' => $notice]);
    }

    /*public function f(){
        Mail::send('home',['gfhfjgf', 'kjhhj'], function ($message) {
            $message->from('coffee@prakharagrawal.com', 'Laravel');
            $message->to('singhdeopa@gmail.com');
        });
    }*/
}
