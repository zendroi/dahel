<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function index()
    {
       
        $data = [
            'title' => 'Festival Musik Desa',
            'location' => 'Desa Sukoharjo',
            'date' => '14 Januari 2025, 10:00 - 18:00',
            'description' => 'Nikmati alunan musik tradisional yang memukau dari musisi lokal di Desa Sukoharjo. Festival ini menampilkan pertunjukan gamelan, angklung, dan alat musik khas lainnya. Selain itu, ada pameran alat musik tradisional dan lokakarya singkat.',
            'schedule' => [
                ['time' => '10:00', 'activity' => 'Pembukaan Festival'],
                ['time' => '12:00', 'activity' => 'Pertunjukan Musik Gamelan'],
                ['time' => '14:00', 'activity' => 'Workshop Alat Musik Tradisional'],
                ['time' => '16:00', 'activity' => 'Penampilan Kolaborasi Musisi Lokal'],
                ['time' => '18:00', 'activity' => 'Penutupan'],
            ],
            'gallery' => [
                '/images/gamelan.jpg',
                '/images/angklung.jpg',
            ],
        ];

        return view('festival', compact('data'));
    }
}
