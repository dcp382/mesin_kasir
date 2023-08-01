<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = [
        'id_supplier',
        'tanggal_beli',
        'id_pembayaran',
        'produk',
        'jumlah',
        'harga',
        'id_jenis_barang'
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class,'id_supplier');
    }

    public function jenis_pembayaran(){
        return $this->belongsTo(JenisPembayaran::class,'id_pembayaran');
    }

    public function jenis_barang(){
        return $this->belongsTo(JenBar::class,'id_jenis_barang');
    }
}
