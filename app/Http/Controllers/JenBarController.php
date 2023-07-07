<?php

namespace App\Http\Controllers;

use App\Models\JenBar;
use Illuminate\Http\Request;

class JenBarController extends Controller
{
    public function index(){
        $jenbar = JenBar::all();
        $i = 1;
        return view('produk.jenis_barang.index', compact('jenbar','i'));
    }

    public function store(Request $request){
        JenBar::create([
            'jenis_barang' => $request->jenis_barang
        ]);

        return redirect()->route('admin.index_jenbar');
    }
}
