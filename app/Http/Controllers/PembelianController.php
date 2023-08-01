<?php

namespace App\Http\Controllers;

use App\Models\JenBar;
use App\Models\JenisPembayaran;
use App\Models\Pembelian;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){
        $i = 1;
        $pembelian = Pembelian::all();
        $supplier = Supplier::all();
        $jenbar = JenBar::all();
        $jenis_pembayaran = JenisPembayaran::all();
        return view('pembelian.index',compact('i','pembelian','supplier','jenbar','jenis_pembayaran'));
    }

    public function store(Request $request){
        Pembelian::create([
            'id_supplier' => $request->supplier,
            'tanggal_beli' => $request->tanggal_beli,
            'id_pembayaran' => $request->jenis_pembayaran,
            'produk' => $request->nama_barang,
            'jumlah' => $request->jumlah_barang,
            'harga' => $request->harga,
            'id_jenis_barang' => $request->jenis_barang
        ]);

        return redirect()->route('admin.pembelian');
    }
}
