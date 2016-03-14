<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Booking;
use App\CountNotification;
use App\Notification;
use Auth;
//use Request;

class BookingController extends Controller
{
    public function booked(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'pname' => 'required',
            'package_det' => 'required',
            'idate' => 'required',
            'budget' => 'required'
        ]);

        //store new booking
        $booking = new Booking;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone_no = $request->phone;
        $booking->package_name = $request->pname;
        $booking->package_det = $request->package_det;
        $booking->date_of_interest = $request->idate;
        $booking->estimate_budget = $request->budget;
        $booking->save();

        //update notification count
        $uid = Auth::user()->uid;
        $count = CountNotification::findorFail($uid);
        $count->count = ($count->count)+1;
        $count->save();

        //store in notification table
        $notice = new Notification;
        $notice->uid = $uid;
        $notice->booking_id = $booking->id;
        $notice->name = $booking->name;
        $notice->email = $booking->email;
        $notice->save();

        return view('booking',['save' => 'Booking Has Been Registered']);
    }
}
