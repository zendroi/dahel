@extends('layouts.main')

@section('title', 'Beranda - Jelajahi Desa')

@section('content')

<main class="pt-20">
    <div class="container mx-auto bg-white shadow-md rounded p-6">
        <h1 class="text-2xl font-bold mb-4">Riwayat Pemesanan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama depan</th>
                    <th scope="col">nama belakang</th>
                    <th scope="col">email</th>
                    <th scope="col">nomor telpon</th>
                    <th scope="col">jumlah penumpang</th>
                    <th scope="col">tanggal</th>
                </tr>
                @foreach ($pesanan as $no=>$data)
                <tr>
                    <th scope="col">{{ $no+1 }}</th>
                    <th scope="col">{{ $data->nama_depan }}</th>
                    <th scope="col">{{ $data->nama_belakang }}</th>
                    <th scope="col">{{ $data->email }}</th>
                    <th scope="col">{{ $data->nomor_telpon }}</th>
                    <th scope="col">{{ $data->jumlah_penumpang }}</th>
                    <th scope="col">{{ $data->tanggal }}</th>
                </tr>
                @endforeach
                
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <ul class="divide-y divide-gray-200">
            <li class="py-4 flex justify-between items-center">
                <div>
                    <strong>Pesanan #12345</strong>
                    <p class="text-sm text-gray-500">Tanggal: 10 Januari 2025</p>
                </div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Detail</button>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <strong>Pesanan #12346</strong>
                    <p class="text-sm text-gray-500">Tanggal: 11 Januari 2025</p>
                </div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Detail</button>
            </li>
            <li class="py-4 flex justify-between items-center">
                <div>
                    <strong>Pesanan #12347</strong>
                    <p class="text-sm text-gray-500">Tanggal: 12 Januari 2025</p>
                </div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Detail</button>
            </li>
        </ul>
    </div>
</main>