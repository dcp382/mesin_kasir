<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenBar extends Model
{
    use HasFactory;

    protected $table = 'jenis_barang';

    protected $fillable = [
        'jenis_barang'
    ];

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }
}
