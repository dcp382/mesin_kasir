<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function getid($id){
        $customer = Customer::find($id);

        return $customer;
    }

    public function index(){
        $customer = Customer::all();
        $i = 1;
        
        return view('customer.index',compact('customer','i'));
    }

    public function store(Request $request){
        Customer::create([
            'nama' => $request->nama_pelanggan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat_pelanggan,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect()->route('admin.customer');
    }

    public function destroy($id){
        $this->getid($id)->delete();
        return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
    }
}
