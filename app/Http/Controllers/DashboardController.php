<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }
    public function index_user(){
        return view('dashboard.dashboard');
    }
}
