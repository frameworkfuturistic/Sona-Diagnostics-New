<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AddDoctors;
use App\Models\appointment;
use App\Models\TestGroup;

class HomeController extends Controller
{
    /*
        userType 0 for general users
        UserType 1 for admin users
        UserType 2 for Collection Center Users
    */

    public function redirect1(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor=AddDoctors::all();
                $testGroup=TestGroup::select('GroupName')->get();
                return view('user.index',['doctors'=>$doctor],['testGroups'=>$testGroup]);
            }
            if(Auth::user()->usertype=='1'){
                return view('admin.home');
            }
            if(Auth::user()->usertype=='2'){
                return 'Collection Center Dashboard';
            }
        }
        else
        {
            $doctor=AddDoctors::all();
            $testGroup=TestGroup::select('GroupName')->get();
            return view('user.index',['doctors'=>$doctor],['testGroups'=>$testGroup]);
        }
    }


    public function redirect(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor=AddDoctors::all();
                $testGroup=TestGroup::select('GroupName')->get();
                return view('user.index',['doctors'=>$doctor],['testGroups'=>$testGroup]);
            }
            if(Auth::user()->usertype=='1'){
                return view('admin.home');
            }
            if(Auth::user()->usertype=='2'){
                return 'Collection Center Dashboard';
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index(){
        $doctor=AddDoctors::all();
        $testGroup=TestGroup::select('GroupName','Charge')->get();
        return view('user.index',['doctors'=>$doctor],['testGroups'=>$testGroup]);
    }

    public function myappointments()
    {   if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',['appoints'=>$appoint]);
        }
        else{
            return back();
        }
    }
    public function deleteappointment($id){
        $appoint=appointment::find($id);
        $appoint->delete();
        return back()->with('success','Successfully deleted the appointment');
    }
}
