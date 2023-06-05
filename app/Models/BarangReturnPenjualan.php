<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangReturnPenjualan extends Model
{
    use HasFactory;
    protected $table = 'barang_return_penjualan';
    protected $primaryKey = 'Id_BarangReturnPenjualan';
    protected $guarded = [];
}
