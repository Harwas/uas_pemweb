<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\ProfileChart;

class ProfileController extends Controller
{
    public function index(ProfileChart $chart)
    {
        return view('Profile', [
            'activePage' => 'profile',
            'title' => 'Profile - Pondora Catering',
            'chart' => $chart->build() // Use the injected $chart object
        ]);
    }
}
