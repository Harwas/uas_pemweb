<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    protected $fillable = [
        'jumlah_penjualan', 
        'bulan', 
    ];
}
