<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    public function index(){
        $i = 1;
        $pembayaran = JenisPembayaran::all();
        return view('produk.pembayaran.index',compact('i','pembayaran'));
    }

    public function store(Request $request){
        // dd($request->nama_pembayaran);
        JenisPembayaran::create([
            'nama_pembayaran' => $request->nama_pembayaran
        ]);

        return redirect()->route('admin.pembayaran');
    }
}
