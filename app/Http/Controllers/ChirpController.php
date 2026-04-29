<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Nanda Adiski',
                'message' => 'Just deployed my first Laravel app! 🚀',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'Aira Wulandari',
                'message' => 'Laravel makes development so much fun again!',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Akbar Wardana',
                'message' => 'Working on something cool with Laravel!',
                'time' => '3 hours ago'
            ],
        ];

        return view('welcome', ['chirps' => $chirps]);
    }
}
