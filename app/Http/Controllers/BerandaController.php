<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('index', [
            'activePage' => 'beranda',
            'title' => 'Beranda - Pondora Catering'
        ]);
    }
}
