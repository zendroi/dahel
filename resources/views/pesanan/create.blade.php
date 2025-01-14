<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pembayaran</title>
    <style>
        body {
            background: url('{{ asset('images/bg.png') }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen">
    <form action="{{ route('pesanan.store') }}" method="POST">
            @csrf
        <div class="relative max-w-4xl w-full bg-white rounded-lg shadow-lg p-8">
            <!-- Button Exit -->
            <button
                class="absolute top-4 left-4 bg-gray-500 text-white font-bold py-2 px-3 rounded-lg hover:bg-gray-700">
                &lt;
            </button>

            <!-- Content -->
            <img src="data:image/jpeg;base64,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"
                alt="Pemandangan Gunung Bromo" class="w-full rounded-lg">
            <h1 class="text-4xl font-bold mt-6">Gunung Bromo</h1>
            <div class="flex items-center mt-3">
                <span class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </span>
                <span class="ml-3 text-gray-600 text-lg">(4.5)</span>
            </div>
            <p class="text-gray-600 text-lg mt-3">Waktu Perjalanan: 3 Januari 2025</p>
            <p class="text-gray-600 text-lg">Harga: Rp. 3.000.000</p>

            <!-- Schedule Section -->
            <div class="mt-6 grid grid-cols-2 gap-6">
                <div>
                    <p class="font-semibold text-lg">Start</p>
                    <p class="text-gray-600 text-lg">Tue, Oct 24</p>
                </div>
                <div>
                    <p class="font-semibold text-lg">End</p>
                    <p class="text-gray-600 text-lg">Wed, Oct 25</p>
                </div>
            </div>

            <!-- Participants Section -->
            <form method="POST" action="" class="mt-6">
                <!-- CSRF Token -->
                @csrf

                <!-- Participant Count -->
                <div class="mt-6">
                    <label for="number" class="block text-gray-700 text-lg">Jumlah Peserta</label>
                    <div class="flex items-center mt-2">
                        <button type="button" onclick="decreaseValue()"
                            class="border border-gray-300 px-3 py-1 text-lg">-</button>
                        <input id="participantCount" name="participant_count" type="number"
                            class="border border-gray-350 text-center w-20 text-lg" value="1" min="1">
                        <button type="button" onclick="increaseValue()"
                            class="border border-gray-300 px-3 py-1 text-lg">+</button>
                    </div>
                    <p class="mt-3 text-gray-600 text-lg text-center">Rincian Harga per Orang: Rp 300.000</p>
                </div>

                <!-- Visitor Info Form -->
                <div class="mt-6">
                    <h2 class="font-semibold text-orange-500 text-xl">Form Informasi Pengunjung</h2>
                    <div class="mt-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                        <input class="border border-gray-300 rounded w-full p-3 mt-2 text-lg" type="text"
                            name="namalengkap" id="namalengkap" placeholder="Nama Lengkap" required>
                    </div>

                    <div class="flex mt-3">
                        <div class="w-1/4 mr-2">
                            <label for="nomornegara" class="form-label">Kode Negara</label>
                            <input class="border border-gray-300 rounded w-full p-3 mt-2 text-lg" name="nomornegara"
                                id="nomornegara" type="text" placeholder="+62" value="+62" required>
                        </div>
                        <div class="w-3/4">
                            <label for="nomortelpon" class="form-label">Nomor Telepon</label>
                            <input class="border border-gray-300 rounded w-full p-3 mt-2 text-lg" type="tel"
                                name="nomortelpon" id="nomortelpon" placeholder="Nomor Telepon" required>
                                
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-orange-500 text-white w-full py-3 rounded mt-8 text-lg font-semibold hover:bg-orange-600">
                    <i class="bi-check-circle me-2"></i> Buat Pesanan
                </button>

                <!-- JavaScript for participant count -->
                <script>
                    function decreaseValue() {
                        const input = document.getElementById('participantCount');
                        let currentValue = parseInt(input.value);
                        if (currentValue > 1) {
                            input.value = currentValue - 1;
                        }
                    }

                    function increaseValue() {
                        const input = document.getElementById('participantCount');
                        let currentValue = parseInt(input.value);
                        input.value = currentValue + 1;
                    }
                </script>
            </form>
        </div>
</body>

</html>
