@extends('layouts.main')

@section('title', 'Beranda - Jelajahi Desa')

@section('content')
    <header class="bg-gradient-to-r from-blue-500 to-blue-300 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-extrabold">Eksplorasi Tanpa Batas di Nusantara</h1>
            <p class="mt-4 text-lg">Indonesia memiliki sejuta pesona yang menunggu untuk ditemukan.</p>
            <button class="mt-6 bg-white text-blue-500 px-6 py-3 rounded-full font-semibold">Jelajahi Sekarang</button>
            <p class="mt-2">Trailer JeDa</p>
        </div>
    </header>

    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Bersama JeDa, Temukan Keajaiban Nusantara</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-calendar text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Paket Wisata Fleksibel</h3>
                    <p>Paket yang dapat disesuaikan dengan kebutuhan Anda.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-tags text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Harga Kompetitif</h3>
                    <p>Paket wisata terjangkau dengan kualitas terbaik.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-headset text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Pelayanan Pelanggan 24/7</h3>
                    <p>Dukungan pelanggan yang siap membantu kapan saja.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-plane text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Destinasi Lengkap</h3>
                    <p>Pergi kemana pun angin membawa anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Rekomendasi Destinasi Wisata Terbaik</h2>
            <div class="scroll-container flex mt-8 space-x-4 overflow-x-auto pb-4">
                <!-- Destinasi 1 -->
                <a href="{{ route('booking.index') }}" class="inline-block bg-white shadow-lg rounded-lg overflow-hidden w-64 flex-shrink-0">
                    <img src="https://d2ile4x3f22snf.cloudfront.net/wp-content/uploads/sites/210/2017/11/05101453/sunrise-candi-borobudur.jpg" 
                         alt="Gunung Bromo" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">Gunung Bromo</h3>
                        <p>Rp. 500.000</p>
                    </div>
                </a>

                <!-- Destinasi 2-5 -->
                <!-- [Destinasi lainnya tetap sama seperti sebelumnya] -->

                <!-- Lihat lebih banyak -->
                <div class="inline-block flex justify-center items-center bg-gray-200 shadow-lg rounded-lg w-64 flex-shrink-0">
                    <a href="" class="text-blue-500 font-semibold text-lg">
                        <i class="fas fa-arrow-right"></i> Lihat Lebih Banyak
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Pesan Perjalanan Impian Anda Dengan Mudah Di JeDa</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-clock text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Proses Cepat</h3>
                    <p>Nikmati proses pemesanan cepat.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-map-marked-alt text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Kemudahan Akses</h3>
                    <p>Pilih destinasi dan paket wisata hanya dengan beberapa klik.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-headset text-blue-500 text-4xl"></i>
                    <h3 class="mt-4 font-semibold">Pelayanan Pelanggan 24/7</h3>
                    <p>Dukungan pelanggan yang siap membantu kapan saja.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Apa Kata Mereka?</h2>
            <div class="mt-8">
                <blockquote class="italic text-lg">"Pengalaman luar biasa! Proses pemesanan sangat mudah dan cepat.
                    Destinasi yang ditawarkan benar-benar memukau. Sangat direkomendasikan!"</blockquote>
                <p class="mt-4 font-semibold">Mike Taylor, Lahore, Pakistan</p>
            </div>
        </div>
    </section>
@endsection