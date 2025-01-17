@extends('layouts.main')

@section('title', 'Edit Pesanan')

@section('content')
<main class="pt-20">
    <div class="container mx-auto bg-white shadow-md rounded p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Pesanan</h1>
        <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_depan" class="block text-gray-700">Nama Depan:</label>
                <input type="text" name="nama_depan" id="nama_depan" class="w-full border rounded p-2" value="{{ $pesanan->nama_depan }}">
            </div>

            <div class="mb-4">
                <label for="nama_belakang" class="block text-gray-700">Nama Belakang:</label>
                <input type="text" name="nama_belakang" id="nama_belakang" class="w-full border rounded p-2" value="{{ $pesanan->nama_belakang }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" value="{{ $pesanan->email }}">
            </div>

            <div class="mb-4">
                <label for="nomor_telepon" class="block text-gray-700">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" id="nomor_telepon" class="w-full border rounded p-2" value="{{ $pesanan->nomor_telepon }}">
            </div>

            <div class="mb-4">
                <label for="jumlah_penumpang" class="block text-gray-700">Jumlah Penumpang:</label>
                <input type="number" name="jumlah_penumpang" id="jumlah_penumpang" class="w-full border rounded p-2" value="{{ $pesanan->jumlah_penumpang }}">
            </div>

            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="w-full border rounded p-2" value="{{ $pesanan->tanggal }}">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan Perubahan</button>
        </form>
    </div>
</main>
@endsection
