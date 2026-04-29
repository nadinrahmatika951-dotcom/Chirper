<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index ()
    {
        $chirps = [
            [
                'author' => 'Rara',
                'message' => 'Just deployed my first Laravel app! 🚀',
                'time' => '5 minutes ago'
            ],
            [
                'author'=> 'Rio Armanda',
                'message' => 'Laravel makes web development fun again!',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Nanda Praditya',
                'message' => 'Working on something cool with Chirper...',
                'time' => '3 hours ago'
            ]
        ];
        return view('welcome', ['chirps' => $chirps]);
    }
}
