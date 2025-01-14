<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolTourController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tur Sekolah',
            'description' => 'Pelajari pesona Indonesia dengan berbagai keseruan',
            'price' => 'Rp 5.000.000',
            'packages' => [
                [
                    'name' => 'Kampung Inggris',
                    'location' => 'Malang',
                    'image' => 'images/kampung_inggris.jpg',
                ],
                [
                    'name' => 'Toba Learning',
                    'location' => '',
                    'image' => 'images/toba_learning.jpg',
                ],
            ],
            'headerImage' => 'images/school-tour-header.jpg',
        ];

        return view('packages.school-tour', $data);
    }
}
