<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ManageDashboard()
    {
        return view('admin.pages.dashboard');
    }

}
