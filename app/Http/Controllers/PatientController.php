<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function CreatePatient()
    {
        return view('patient.create_patient');
    }
    public function registration(){
        return view('patient.patient_reg');
    }

    public function patientRegStore(Request $request){
        //dd($request->all());

        Registration::create([
            'fname' =>$request->fname,
            'lname' =>$request->lname,
            'birthday' =>$request->birthday,
            'gender' =>$request->gender,
            'email' =>$request->email,
            'pnumber' =>$request->pnumber,
            'address' =>$request->address,
        ]);
        return redirect()->back();
    }
    public function ManagePatientDetails()
    {
        $patientLists=Registration::all();
        return view('admin.pages.patient_details',compact('patientLists'));
    }

   

}
