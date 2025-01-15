@extends('layouts.main')

@section('title', 'Paket Bulan Madu')

@section('content')
    <div class="container mx-auto p-6">
        <div class="header mb-6">
            <img src="{{ asset('images/honeymoon_header.jpg') }}" alt="Paket Bulan Madu" class="w-full rounded-lg shadow-md">
        </div>
        <div class="content">
            <h1 class="text-2xl font-bold mb-4">Paket Bulan Madu</h1>
            <p class="mb-4">Nikmati pengalaman romantis terbaik bersama pasangan Anda.</p>
            <h2 class="text-xl font-semibold mb-2">Tentang Paket</h2>
            <p class="mb-4">Nikmati makan malam romantis, spa pasangan, dan tur pribadi dengan pengalaman tak terlupakan.</p>
            <h2 class="text-xl font-semibold mb-2">Harga Mulai dari</h2>
            <p class="mb-6">Rp 5.000.000</p>
            <div class="packages grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($packages as $package)
                    <div class="package bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('images/' . $package['image']) }}" alt="{{ $package['name'] }}" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h3 class="text-lg font-semibold">{{ $package['name'] }}</h3>
                        <p class="text-gray-600">{{ $package['location'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
