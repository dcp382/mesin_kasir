<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'id_jenis_barang',
        'jumlah_barang',
        'harga',
        'id_supplier',
    ];

    public function jenbar(){
        return $this->belongsTo(JenBar::class,'id_jenis_barang','id');
    } 

    public function supplier(){
        return $this->belongsTo(Supplier::class,'id_supplier','id');
    }
}
