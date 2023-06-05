<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaGudang extends Model
{
    use HasFactory;
    protected $table = 'kepala_gudang';
    protected $primaryKey = 'Id_KepalaGudang';
    protected $guarded = [];
}
