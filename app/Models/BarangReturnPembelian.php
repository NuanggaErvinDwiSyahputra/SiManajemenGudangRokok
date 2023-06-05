<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangReturnPembelian extends Model
{
    use HasFactory;
    protected $table = 'barang_return_pembelian';
    protected $primaryKey = 'Id_BarangReturnPembelian';
    protected $guarded = [];
}
