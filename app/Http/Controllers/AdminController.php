<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\MaharajpuraStudent;
use App\Student;

class AdminController extends Controller
{
    public function login(Request $request){

    	if($request->isMethod('post')){

    		$data=$request->input();

    		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){

    			return redirect('/dashboard');
    		}
    		else{

    			return redirect()->back();
    		}
    	}

    	return view('admin.admin_login');
    }

    public function dashboard(){

        $count=MaharajpuraStudent::count();
        $countMorar=Student::count();

    	return view('admin.dashboard',compact('count','countMorar'));
    }

    public function logout(){

    	Session::flush();

    	return redirect('/admin');
    }
}
