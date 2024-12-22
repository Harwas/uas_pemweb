<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuBox extends Model
{
    protected $fillable = [
        'price',       // Harga menu, disimpan dalam bentuk numerik
    ];
    public function MenuItem(){
        return $this->belongsTo(MenuItem::class);
    }
}
