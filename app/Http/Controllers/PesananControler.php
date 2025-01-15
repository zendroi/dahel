<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::get();
        dd($pesanan);
        return view('pesanan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'jumlah_penumpang' => 'required|integer|min:1',
            'tanggal' => 'required|date',
        ]);

        $pesanan = new Pesanan();
        $pesanan->nama_depan = $request->nama_depan;
        $pesanan->nama_belakang = $request->nama_belakang;
        $pesanan->email = $request->email;
        $pesanan->nomor_telepon = $request->nomor_telepon;
        $pesanan->jumlah_penumpang = $request->jumlah_penumpang;
        $pesanan->tanggal = $request->tanggal;
        $pesanan->save();

        return redirect()->route('booking.index');
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
