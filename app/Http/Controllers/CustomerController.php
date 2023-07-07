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
        
        return view('customer.index',compact('customer'));
    }

    public function form_tambah(){
        return view('customer.form_tambah');
    }

    public function store(Request $request){
        Customer::create([
            'nama' => $request->nama_pelanggan,
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
