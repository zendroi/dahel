@extends('layouts.main')

@section('title', 'Gunung Bromo - Jelajahi Desa')

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden relative">
            <!-- Gambar -->
            <div class="relative">
                <img src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTInOZbgiH7YUXPZ3X7b1lh-ganKMXJEIGZyedquHmd-tANKhO-sSB26acleDNMx5CRhJFmzT70CHqL_rm3jyt4L3h2rYB7vuaKgETh2PA"
                    alt="Pemandangan Gunung Bromo" class="w-full h-64 object-cover">
                <!-- Tombol Kiri -->
                <button
                    class="absolute top-1/2 -translate-y-1/2 left-4 bg-gray-500 text-white font-bold py-2 px-3 rounded-lg hover:bg-gray-600">
                    &lt;
                </button>
                <!-- Tombol Kanan -->
                <button
                    class="absolute top-1/2 -translate-y-1/2 right-4 bg-gray-500 text-white font-bold py-2 px-3 rounded-lg hover:bg-gray-600">
                    &gt;
                </button>
            </div>

            <!-- Konten -->
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800">Gunung Bromo</h1>
                <div class="flex items-center mt-2">
                    <span class="text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </span>
                    <span class="text-gray-500 ml-2">(4.5)</span>
                </div>
                <div class="mt-4">
                    <p><strong>Waktu Perjalanan:</strong> 3 Januari 2025</p>
                    <p><strong>Harga:</strong> Rp. 3.000.000</p>
                    <p><strong>Jam:</strong> 3 jam</p>
                </div>

                <!-- Aktivitas -->
                <div class="mt-6">
                    <h2 class="text-lg font-semibold">Aktivitas Tur</h2>
                    <ul class="list-disc list-inside mt-2">
                        <li>Menjelajahi kawah Bromo</li>
                        <li>Berfoto di Bukit Teletubbies</li>
                        <li>Melihat sunrise di Penanjakan</li>
                    </ul>
                    <!-- Tombol Pesan Sekarang -->
                    <button class="mt-4 bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600">
                        Pesan Sekarang
                    </button>
                    <a href="{{ route('pesanan.create') }}"
                        class="btn-primary mt-4 bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600">pesan
                        sekarang</a>
                </div>

                <!-- Ulasan -->
                <div class="mt-6">
                    <h2 class="text-lg font-semibold">Apa Kata Mereka?</h2>
                    <div class="flex items-start mt-2">
                        <img src="https://placehold.co/50x50" alt="Pengguna" class="rounded-full mr-4">
                        <div>
                            <p class="bg-gray-200 p-4 rounded-lg">
                                "Pengalaman luar biasa! Proses pemesanan sangat mudah dan cepat. Destinasi yang
                                ditawarkan benar-benar memukau. Sangat direkomendasikan!"
                            </p>
                            <p class="mt-2 font-bold">Mike Taylor</p>
                            <p>Lahore, Pakistan</p>
                            <span class="text-yellow-500">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i> (4.5)
                            </span>
                            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                                <thead>
                                    <tr>
                                        <th>ID Pemesanan</th>
                                        <th>Jumlah Peserta</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nomor Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemesanan as $pemesanan)
                                        <tr>
                                            <td>{{ $pemesanan->pemesanan_id }}</td>
                                            <td>{{ $pemesanan->jumlahpeserta }}</td>
                                            <td>{{ $pemesanan->namalengkap }}</td>
                                            <td>{{ $pemesanan->nomertelpon }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('pesanan.show', ['pesanan' => $pemesanan->pemesanan_id]) }}"
                                                        class="btn btn-outline-dark btn-sm me-2">
                                                        <i class="bi-person-lines-fill"></i>
                                                    </a>
                                                    

                                                    <div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
