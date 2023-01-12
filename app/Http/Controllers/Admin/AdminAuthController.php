<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {


//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);

//        dd($request->all());

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){

//            dd('ok');
//            $user = auth()->guard('admin')->user();
//            if($user->is_admin == 1){
                return redirect()->route('admin.dashboard')->with('success','You are Logged in sucessfully.');
//            }
        }else {
//            dd('not ok');
            return back()->with('error','Whoops! invalid email and password.');
        }


//        $user = auth()->guard('admin')->user();

//            if($user->is_admin == 1){
//                return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
//            }
//        }else {
//            return back()->with('error','Whoops! invalid email and password.');
//        }
    }

    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('admin.adminLogin'));
    }
}
