<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

class MemberController extends Controller
{
    public function registerMember(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30|alpha_spaces',
            'user_name' => 'required|unique:users',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|confirmed|min:6',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
        ]);

        $user = new User;
        $user->uid = Auth::user()->uid;
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->active_flag = Auth::user()->active_flag;
        $user->role = 'member';

        $user->save();
        return view('pages.member_register',['save' => 'Member "'.$request->name.'" has been registered.']);
        //return Auth::user()->name;
    }
}
