<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ManagePatient()
    {
        return view('admin.pages.patient');
    }
}
