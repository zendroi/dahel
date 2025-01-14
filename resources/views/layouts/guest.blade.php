<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JeDaTravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS -->
    <style>
        body {
            background: url('{{ url('images/background_guest.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>

</head>
x
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900/80">
        <!-- Logo -->
        <div class="mb-6">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="JeDaTravel Logo" class="w-40 h-auto">
            </a>
        </div>

        <!-- Card Container -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
            <!-- Slot Content -->
            {{ $slot }}
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} {{ config('app.name', 'JeDaTravel') }}. All Rights Reserved.
        </div>
    </div>
</body>

</html>
