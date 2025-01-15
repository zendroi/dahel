<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoneymoonPackageController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'name' => 'Batu Love City',
                'location' => 'Desa Sukoharjo',
                'image' => 'batu-love-city.jpg',
            ],
            [
                'name' => 'Sukabumi In Love',
                'location' => 'Sukabumi',
                'image' => 'sukabumi-in-love.jpg',
            ],
        ];

       
        return view('honeymoon_package', compact('packages'));
    }
}
