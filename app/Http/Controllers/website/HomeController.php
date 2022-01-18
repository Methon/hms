<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $doctors=Doctor::all();
        return view('website.pages.home',compact('doctors'));
    }
}
