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

        .toast {
            transition: transform 0.5s ease, opacity 0.5s ease;
            transform: translateX(150%);
            opacity: 0;
        }

        .toast.show {
            transform: translateX(0);
            opacity: 1;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen px-4">
        <form action="{{ route('pesanan.store') }}" method="POST" class="w-full max-w-2xl bg-white rounded-lg shadow-lg p-8 relative">
            @csrf
            <img src="https://via.placeholder.com/500x300" alt="Gunung Bromo" class="w-full h-64 object-cover rounded-md">
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
                    <p class="font-semibold text-lg">Mulai</p>
                    <p class="text-gray-600 text-lg">Selasa, 24 Oktober</p>
                </div>
                <div>
                    <p class="font-semibold text-lg">Selesai</p>
                    <p class="text-gray-600 text-lg">Rabu, 25 Oktober</p>
                </div>
            </div>

            <!-- Participants Section -->
            <div class="mt-6">
                <h2 class="text-2xl font-bold mb-4">Informasi Pemesan</h2>
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="nama_depan" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                        <input type="text" id="nama_depan" name="nama_depan" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Nama depan" required>
                    </div>
                    <div>
                        <label for="nama_belakang" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                        <input type="text" id="nama_belakang" name="nama_belakang" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Nama belakang" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="email@example.com" required>
                    </div>
                    <div>
                        <label for="nomor_telpon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" id="nomor_telpon" name="nomor_telpon" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="0812345678" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jumlah Penumpang</label>
                        <div class="flex items-center mt-1">
                            <button type="button" id="decrease" class="px-3 py-1 border border-gray-300 bg-gray-200 rounded-l-md">-</button>
                            <input type="text" id="passenger_count" name="jumlah_penumpang" value="1" readonly class="w-16 text-center border-t border-b border-gray-300">
                            <button type="button" id="increase" class="px-3 py-1 border border-gray-300 bg-gray-200 rounded-r-md">+</button>
                        </div>
                    </div>
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" id="date" name="tanggal" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <div class="flex items-center">
                    <input id="terms" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
                    <label for="terms" class="ml-2 block text-sm text-gray-900">Setuju dengan syarat dan ketentuan</label>
                </div>
            </div>

            <div class="mt-6">
                <button type="button" id="submit_btn" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Submit Form</button>
            </div>
        </form>

        <!-- Toast Notification -->
        <div id="liveToast" class="toast fixed bottom-5 right-5 bg-blue-600 text-white p-4 rounded-lg shadow-lg flex items-center">
            <i class="fas fa-check-circle text-2xl mr-3"></i>
            <span>Formulir berhasil dikirim!</span>
        </div>
    </div>

    <script>
        // Toast functionality
        const toast = document.getElementById('liveToast');
        const submitBtn = document.getElementById('submit_btn');

        submitBtn.addEventListener('click', () => {
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        });

        // Passenger increment/decrement functionality
        const decreaseBtn = document.getElementById('decrease');
        const increaseBtn = document.getElementById('increase');
        const passengerCount = document.getElementById('passenger_count');

        decreaseBtn.addEventListener('click', () => {
            let count = parseInt(passengerCount.value);
            if (count > 1) {
                passengerCount.value = count - 1;
            }
        });

        increaseBtn.addEventListener('click', () => {
            let count = parseInt(passengerCount.value);
            passengerCount.value = count + 1;
        });
    </script>
</body>

</html>
