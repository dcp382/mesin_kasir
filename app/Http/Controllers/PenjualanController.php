<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(){
        $produk = Produk::all();
        $i = 1;
        return view('penjualan.index', compact('produk','i'));
    }
}
