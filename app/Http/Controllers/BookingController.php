<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Carbon\Carbon;

use App\Booking;
use App\CountNotification;
use App\Notification;

class BookingController extends Controller
{
    public function booked(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'pname' => 'required',
            'idate' => 'required',
            'budget' => 'required'
        ]);

        //store new booking
        $booking = new Booking;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone_no = $request->phone;
        $booking->package_name = $request->pname;
        $booking->date_of_interest = $request->idate;
        $booking->estimate_budget = $request->budget;
        $booking->date_of_booking = Carbon::parse(Carbon::now()->format('Y-m-d'));
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
        $notice->booking_date = $booking->date_of_booking;
        $notice->save();

        return view('booking',['save' => 'Booking Has Been Registered']);
    }
}
