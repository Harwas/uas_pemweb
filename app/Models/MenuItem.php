<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    // Daftar kolom yang bisa diisi secara massal (mass assignment)
    protected $fillable = [
        'name',        // Nama menu, disimpan sebagai string
        'description', // Deskripsi menu untuk penjelasan lebih lanjut
        'photo',       // Nama file foto menu, disimpan sebagai string
    ];
    
    public function MenuBox(){
        return $this->hasOne(MenuBox::class);
    }
    public function MenuPrasmanan(){
        return $this->hasOne(MenuPrasmanan::class);
    }
}
