<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';

    protected $fillable = [
        'nama',
        'alamat',
        'no_telepon',
        'email'
    ];

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }
    
}
