<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

        $pemesanan = DB::select(' 
        select *, pemesanan_id as pemesanan_id
        from pemesanan 
    ');
        $pageTitle="Pesanan";
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
    // Custom error messages
    $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    // Validasi input
    $validator = Validator::make(
        $request->all(),
        [ 
            'namalengkap' => 'required',
            'jumlahpeserta' => 'required|numeric',
            'nomortelpon' => 'required|numeric',
            'nomornegara' => 'required|numeric',
        ],
        $messages 
    );

    // Jika validasi gagal, kembali ke halaman sebelumnya dengan error
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Jika validasi berhasil, simpan data
    Pemesanan::create([
        'jumlahpeserta' => $request->jumlahpeserta,
        'namalengkap' => $request->namalengkap,
        'nomertelpon' => $request->nomornegara . $request->nomortelpon,
    ]);
    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('pesanan.index')->with('success', 'Pemesanan berhasil ditambahkan!');
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
