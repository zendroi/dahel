<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

        $pemesanan = Pemesanan::all();

        $pageTitle = "Pesanan";
        return view('pesanan.index', [
            'pageTitle' => $pageTitle,
            'pemesanan' => $pemesanan
        ]);


    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'buat pesanan';

        return view('pesanan.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'namalengkap' => 'required|string|max:255',
                'jumlahpeserta' => 'required|numeric|min:1|max:10',
                'nomortelpon' => 'required|numeric|digits_between:10,15',
                'nomornegara' => 'required|numeric|digits_between:1,4',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Debugging log
            Log::info('Data yang disimpan:', $request->all());

            Pemesanan::create([
                'jumlahpeserta' => $request->jumlahpeserta,
                'namalengkap' => $request->namalengkap,
                'nomornasional' => $request->nomornegara,
                'nomortelpon' => $request->nomortelpon,
            ]);

            return redirect()->route('pesanan.index')->with('success', 'Pemesanan berhasil ditambahkan!');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
