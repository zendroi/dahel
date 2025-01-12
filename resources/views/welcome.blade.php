<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajahi Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            transition: top 0.3s;
        }
    </style>
</head>
<body class="bg-white">

    <nav class="navbar fixed top-0 w-full bg-white shadow-md z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div><img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Jelajahi Desa Logo" class="h-12"></div>
            <div class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-blue-500">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Desa Wisata</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Rekomendasi</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Booking</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Event</a>
                <a href="{{ route('login') }}" class="text-blue-500 border border-blue-500 px-4 py-2 rounded">Sign in</a>
            </div>
        </div>
    </nav>

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
                    <i class="fas fa-plane text-blue-500 text-4xl"></i>
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
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Rekomendasi Destinasi Wisata Terbaik</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://d2ile4x3f22snf.cloudfront.net/wp-content/uploads/sites/210/2017/11/05101453/sunrise-candi-borobudur.jpg" alt="Candi Borobudur" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">Candi Borobudur</h3>
                        <p>Rp. 500.000</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x300" alt="Raja Ampat" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">Raja Ampat</h3>
                        <p>Rp. 3.000.000</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x300" alt="Pantai" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">Pantai</h3>
                        <p>Rp. 10.000</p>
                    </div>
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
                <blockquote class="italic text-lg">"Pengalaman luar biasa! Proses pemesanan sangat mudah dan cepat. Destinasi yang ditawarkan benar-benar memukau. Sangat direkomendasikan!"</blockquote>
                <p class="mt-4 font-semibold">Mike Taylor, Lahore, Pakistan</p>
            </div>
        </div>
    </section>

    <footer class="py-8 bg-gray-800 text-white">
        <div class="container mx-auto text-center">
            <div class="mb-4">Company</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-300">About</a>
                <a href="#" class="hover:text-blue-300">Careers</a>
                <a href="#" class="hover:text-blue-300">Mobile</a>
            </div>
            <div class="mt-4">Contact</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-300">Help/FAQ</a>
                <a href="#" class="hover:text-blue-300">Press</a>
                <a href="#" class="hover:text-blue-300">Affiliates</a>
            </div>
            <div class="mt-4">More</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-300">Airline fees</a>
                <a href="#" class="hover:text-blue-300">Airline</a>
                <a href="#" class="hover:text-blue-300">Low fare tips</a>
            </div>
            <div class="mt-8">&copy; 2023 Jelajahi Desa. All rights reserved.</div>
        </div>
    </footer>

</body>
</html>