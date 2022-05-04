<?php

namespace App\Http\Controllers;

use App\Models\AddDoctors;
use App\Models\appointment;
use App\Models\TestGroup;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function getPendingReport(){
        $appointment=appointment::where('status','=','in progress !!')
                                  ->get();
        return response()->json($appointment);
    }
    public function getApprovedReport(){
        $appointment=appointment::where('status','=','Approved !!')
                                  ->get();
        return response()->json($appointment);
    }

    public function approve_appointment(){
        return view('admin.appointments.view_appointment');
    }

    public function approved_appointment(){
        $appointment=appointment::where('status','=','Approved !!')
                                  ->get();
        return view('admin.appointments.approved_appointment',['appointments'=>$appointment]);
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
        return view('admin.appointments.completed_appointment',['appointments'=>$appointment]);
    }

    public function cancel_patient(Request $request,$id){
        $appointment=appointment::find($id);
        $appointment->status='Cancelled !!';
        $appointment->save();
        return back();
    }
}
