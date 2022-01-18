<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function ManageAppointment()
    {
        {
            $appointmentlist= Appointment::all();
            return view('patient.appointment', compact('appointmentlist'));
        }
       
    }

    public function ManageAppointmentAdd()
    {
        return view('patient.add_appointment');
    }

    public function ManageAppointmentForm(Request $request){
       // dd($request->all());
       Appointment::create([
            'appointment' =>$request->appointment,
            'patientname' =>$request->patientname,
            'department' =>$request->department,
            'doctorname' =>$request->doctorname,
            'date' =>$request->date,
            'time' =>$request->time,
            'pemail' =>$request->pemail,
            'pphone' =>$request->pphone,
            'message' =>$request->message,
            'status' =>$request->status,
            
            
            
        ]);
        return redirect()->back();
    }

}







