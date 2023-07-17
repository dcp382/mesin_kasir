<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        $i = 1;

        return view('produk.supplier.index',compact('supplier','i'));
    }

    public function store(Request $request){
        Supplier::create([
            'nama' => $request->nama_supplier,
            'alamat' => $request->alamat_supplier,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.index_supplier');
    }
}
