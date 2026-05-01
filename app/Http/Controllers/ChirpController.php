<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    // Method untuk menampilkan halaman welcome dengan data chirps
    public function index()
    {
        // Data chirps (contoh data sementara)
        $chirps = [
            [
                'author' => 'Nadin Rahmatika',
                'message' => 'Hello Chirper! Selamat belajar Laravel! 🐸',
                'time' => '2026-05-01 10:00:00'
            ],
            [
                'author' => 'Admin',
                'message' => 'Selamat datang di Chirper!',
                'time' => '2026-05-01 09:30:00'
            ],
            [
                'author' => 'User 1',
                'message' => 'Aplikasi ini keren banget!',
                'time' => '2026-05-01 09:00:00'
            ]
        ];
        
        // Kirim data ke view welcome
        return view('welcome', compact('chirps'));
    }
}