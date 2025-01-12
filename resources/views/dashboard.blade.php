<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-blue-900 dark:text-blue-300 leading-tight">
                {{ __('Travel Dashboard') }}
            </h2>
            <div>
                <a href="{{ route('welcome') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow">
                    {{ __('Welcome Page') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="bg-[url('/images/travel-bg.jpg')] bg-cover bg-center min-h-screen py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 bg-opacity-90 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-4">
                        {{ __("Welcome to Your Travel Planner") }}
                    </h3>
                    <p>
                        {{ __("Discover amazing destinations and plan your trips effortlessly!") }}
                    </p>
                </div>
                <div class="p-6 flex justify-center">
                    <!-- Tambahkan link ke fitur utama aplikasi travel -->
                    <a href="{{ route('welcome') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 ease-in-out">
                        {{ __('Explore Destinations') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
