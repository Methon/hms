<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function ManageDoctorReg() 
    {
        return view('patient.doctor_reg');
    }


    public function ManageDashboard() 
    {
        return view('admin.pages.dashboard');
    }

    public function ManageDoctor()
    {
        
        $doctorlist = Doctor::all();
        // dd($doctorlist);
        return view('admin.pages.doctor',compact('doctorlist'));
    }
    public function AddDoctorSchedule()
    {
        $schedulelist = Schedule::all();
                // dd($schedulelist);

        return view('admin.pages.doctor_schedule',compact('schedulelist'));
    }
    public function ManageDoctorSchedule()
    {
        return view('admin.pages.add_schedule');
    }

    public function AddDoctorScheduleForm(Request $request){
        //dd($request->all());
         Schedule::create([
             'dname' =>$request->dname,
             'available' =>$request->available,
             'stime' =>$request->stime,
             'etime' =>$request->etime,
             'message' =>$request->message,
             'status' =>$request->status,
             
             
         ]);
         return redirect()->back();
     }
    

    
    public function DoctorRegForm(Request $request){

        $filename='';
        if($request->hasFile('avatar'))
        {
            $file=$request->file('avatar');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('app/public/uploads',$filename);
        }


    //    dd($request->all());
        Doctor::create([
            'fname' =>$request->fname,
            'lname' =>$request->lname,
            'username' =>$request->username,
            'email' =>$request->email,
            'password' =>$request->password,
            'confirmpassword' =>$request->confirmpassword,
            'dob' =>$request->dob,
            'gender' =>$request->gender,
            'address' =>$request->address,
            'country' =>$request->country,
            'city' =>$request->city,
            'phone' =>$request->phone,
            'avatar' =>$filename,
            'shortbiography' =>$request->shortbiography,
            
            
        ]);
        return redirect()->back();
    }

    public function viewDoctorlist()
    {
        $docotorlist= Doctor::all();
        return view(admin.pages.doctor, compact('doctorlist'));
    }

    public function DoctorView($doctor_id)
    {
                    
        $item=Doctor::find($doctor_id);

        return view('admin.pages.doctor_view',compact('item'));

    }

    public function DoctorDelete($doctor_id)
    {
                    
        Doctor::find($doctor_id)->delete();

        return redirect()->back()->with('success','Doctor Profile Deleted.');


    }

    public function DoctorEdit($id)
    {

        $item=Doctor::find($id);
//        $product=Product::where('user_id',$id)->first();

        return view('admin.pages.doctor_edit',compact('item'));

    }

    public function DoctorUpdate(Request $request,$id)
{
    $item=Doctor::find($id);
//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);
    $image_name=$item->avatar;
//      step 1: check image exist in this request.
    if($request->hasFile('Doctor_image'))
    {
        //unlink old image

        // step 2: generate file name
        $image_name=date('Ymdhis') .'.'. $request->file('doctor_image')->getClientOriginalExtension();
        //step 3 : store into project directory
        $request->file('doctor_image')->storeAs('/doctors',$image_name);
    }

    $item->update([
        // field name from db || field name from form
        
            'lname' =>$request->lname,
            'username' =>$request->username,
            'email' =>$request->email,
            'password' =>$request->password,
            'confirmpassword' =>$request->confirmpassword,
            'dob' =>$request->dob,
            'gender' =>$request->gender,
            'address' =>$request->address,
            'country' =>$request->country,
            'city' =>$request->city,
            'phone' =>$request->phone,
            'avatar' =>$filename,
            'shortbiography' =>$request->shortbiography,
            

    ]);
    return redirect()->route('manage.doctor')->with('success','Doctor Updated Successfully.');
}

    

   
   
}



