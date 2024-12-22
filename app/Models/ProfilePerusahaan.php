<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    // Daftar kolom yang bisa diisi secara massal (mass assignment)
    protected $fillable = [
        'link_profile',
    ];

    // Nama tabel tidak perlu disebutkan jika menggunakan konvensi penamaan tabel Laravel.
}
