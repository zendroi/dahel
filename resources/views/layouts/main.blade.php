<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jelajahi Desa')</title>
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

    <!-- Header -->
    <nav class="navbar fixed top-0 w-full bg-white shadow-md z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div>
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Jelajahi Desa Logo" class="h-12">
            </div>
            <div class="space-x-4">
                <a href="{{ route('welcome') }}" class="text-gray-700 hover:text-blue-500">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Desa Wisata</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Rekomendasi</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Booking</a>
                <a href="#" class="text-gray-700 hover:text-blue-500">Event</a>
                <a href="{{ route('login') }}" class="text-blue-500 border border-blue-500 px-4 py-2 rounded">Sign in</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
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
