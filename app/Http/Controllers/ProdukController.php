<?php

namespace App\Http\Controllers;

use App\Models\JenBar;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        $i = 1;
        $supplier = Supplier::all();
        $jenbar = JenBar::all();
        return view('produk.daftar_produk.index',compact('produk','i','supplier','jenbar'));
    }

    public function store(Request $request){
        Produk::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'id_jenis_barang' => $request->jenis_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga' => $request->harga,
            'id_supplier' => $request->supplier,
        ]);

        return redirect()->route('admin.produk');
    }
}
