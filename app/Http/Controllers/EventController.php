<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = [
            [
                'title' => 'Festival Musik Desa',
                'location' => 'Desa Sukoharjo',
                'image' => 'festival-musik.jpg',
            ],
            [
                'title' => 'Festival Masa Panen',
                'location' => 'Desa Sukoharjo',
                'image' => 'masa-panen.jpg',
            ],
            [
                'title' => 'Pameran Seni Tradisional',
                'location' => 'Desa Cibodas',
                'image' => 'pameran-seni.jpg',
            ],
        ];

        return view('event.index', compact('events'));
    }
}
