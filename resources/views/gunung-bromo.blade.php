<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Bromo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('images/bg.png') }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
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
                    <button
                        class="mt-4 bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600">Pesan
                        Sekarang</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
