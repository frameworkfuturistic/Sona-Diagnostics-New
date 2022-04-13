<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use App\Models\AddDoctors;
use App\Models\appointment;
use App\Models\TestGroup;
use App\Notifications\EmailNotification;
use Illuminate\Notifications\Events\NotificationSent;
use  Illuminate\Support\Facades\Notification;
use Notifications;


class AdminController extends Controller
{
    public function add_doctor(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1'){
                return view('admin.add_doctor');
            }
        }
        else{
            return redirect('/');
        }
    }
    public function save_doctor(Request $request){
        $doctor=AddDoctors::firstOrNew(
            ['room'=>request('room')]
        );
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        //image path save
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $doctor->img=$imagename;
        //imagepathsave
        $doctor->save();
        return back()->with('success','Successfully Added');
    }
    public function show_doctor(){
        $data=AddDoctors::all();
        return view('admin.show_doctor',['doctors'=>$data]);
    }
    public function update_doctor($id){
        $data=AddDoctors::find($id);
        return view('admin.update_doctor',['doctors'=>$data]);
    }
    public function edit_doctor(Request $request, $id){
        $doctor=AddDoctors::find($request->id);
        $doctor->name=$request->nameupd;
        $doctor->phone=$request->phoneupd;
        $doctor->speciality=$request->specialityupd;
        $doctor->room=$request->roomupd;
        //image path update
        $image=$request->imageupd;
        if($image){

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->imageupd->move('doctorimage',$imagename);
        $doctor->img=$imagename;
        }
        //imagepathupdate
        $doctor->save();
        return redirect('/show_doctor')->with('success','Successfully Updated');
    }
    public function delete_doctor($id){
        $doctor=AddDoctors::find($id);
        $doctor->delete();
        return redirect('/show_doctor')->with('success','Successfully Deleted');
    }
    public function appointment(Request $request){
        if(!(Auth::id())){
            return redirect('/login')
                            ->with('message','You Have to Login First for Booking Your Appointment!!');
        }
        else{
           // dd($request->all());
            $appointment=new appointment;
            $appointment->name=$request->name;
            $appointment->email=$request->email;
            $appointment->date=$request->date;
            $appointment->phone=$request->phone;
            $appointment->message=$request->message;
            $appointment->status="in progress !!";
            $appointment->testGroup=json_encode($request->testGroup);
            if(Auth::id()){
                $appointment->user_id=Auth::user()->id;
            }
            $appointment->save();
            if(Auth::user()->usertype=='1'){
                return redirect('approve_appointment')->with('success','Appointment Successfully Requested. We Will Contact You Soon!!');
            }
            else{
                return redirect('/myappointment')->with('success','Appointment Successfully Requested. We Will Contact You Soon!!');
            }
        }
    }

    public function book_appointment(){
        $doctor=AddDoctors::all();
        $testGroup=TestGroup::select('GroupName','Charge')->get();
        return view('admin.book_appointment',['doctors'=>$doctor],['testGroups'=>$testGroup]);
    }

    public function approve_appointment(){
        $appointment=appointment::where('status','=','in progress !!')
                                  ->get();
        return view('admin.view_appointment',['appointments'=>$appointment]);
    }

    public function approved_appointment(){
        $appointment=appointment::where('status','=','Approved !!')
                                  ->get();
        return view('admin.approved_appointment',['appointments'=>$appointment]);
    }

    public function approve_patient(Request $request,$id){
        $appointment=appointment::find($id);
        $appointment->status='Approved !!';
        $appointment->save();
        return back();
    }

    public function complete_patient(Request $request,$id){
        $appointment=appointment::find($id);
        $appointment->status='Completed !!';
        $appointment->save();
        return back();
    }

    public function completed_patient(){
        $appointment=appointment::where('status','=','Completed !!')
                                  ->get();
        return view('admin.completed_appointment',['appointments'=>$appointment]);
    }

    public function cancel_patient(Request $request,$id){
        $appointment=appointment::find($id);
        $appointment->status='Cancelled !!';
        $appointment->save();
        return back();
    }
    public function mail_patient($id){
        $appointment=appointment::find($id);
        return view('admin.mail_patient',['appointments'=>$appointment]);
    }
    public function sendemail(Request $request,$id){
        $data=appointment::find($id);
        $details=[
            'greeting'=>$request->greeting,
            'body'=>$request->body,
            'actiontext'=>$request->text,
            'actionurl'=>$request->url,
            'endpart'=>$request->endpart
        ];

        Notification::send($data,new EmailNotification($details));
        return back()->with('success','Email Successfully sent to the user email!!');
    }
}
