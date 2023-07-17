<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $customer = Customer::count();
        $supplier = Supplier::count();
        return view('dashboard.dashboard',compact('customer','supplier'));
    }
    
}
