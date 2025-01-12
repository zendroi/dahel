<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GunungBromoController extends Controller
{
    public function index()
    {
        // Kirim data ke view jika diperlukan
        $data = [
            'title' => 'Gunung Bromo',
            'rating' => 4.5,
            'travel_date' => '3 Januari 2025',
            'price' => 'Rp. 3.000.000',
            'duration' => '3 jam',
            'activities' => [
                'Menjelajahi kawah Bromo',
                'Berfoto di Bukit Teletubbies',
                'Melihat sunrise di Penanjakan'
            ],
            'review' => [
                'text' => 'Pengalaman luar biasa! Proses pemesanan sangat mudah dan cepat. Destinasi yang ditawarkan benar-benar memukau. Sangat direkomendasikan!',
                'name' => 'Mike Taylor',
                'location' => 'Lahore, Pakistan',
                'rating' => 4.5,
            ]
        ];

        // Return ke view
        return view('gunung-bromo', $data);
    }
}
