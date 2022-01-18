<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function ManageDepartment()
    {
        {
            $departmentlist= Department::all();
            return view('patient.department', compact('departmentlist'));
        }
       
    }

    public function  ManageDepartmentAdd()
    {
        return view('patient.add_department');
    }
    public function ManageDepartmentForm(Request $request){
         //dd($request->all());
        Department::create([
             'departmentname' =>$request->departmentname,
             'description' =>$request->description,
             'dstatus' =>$request->dstatus,
             
             
         ]);
         return redirect()->back();
     }
    
   

}
