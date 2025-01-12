<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">
        Selamat datang! Login ke akun Anda
    </h1>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingat saya') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline dark:text-indigo-400">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div>
            <x-primary-button class="w-full justify-center">
                {{ __('Login') }}
            </x-primary-button>
        </div>

        <!-- Divider -->
        <div class="flex items-center justify-center space-x-2 my-4">
            <hr class="w-1/4 border-gray-300 dark:border-gray-700">
            <span class="text-gray-500 dark:text-gray-400 text-sm">atau</span>
            <hr class="w-1/4 border-gray-300 dark:border-gray-700">
        </div>

        <!-- Social Login -->
        <div class="grid grid-cols-1 gap-3">
            <button type="button" class="flex items-center justify-center w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                <i class="fab fa-facebook-f mr-2"></i> Login with Facebook
            </button>
            <button type="button" class="flex items-center justify-center w-full px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                <i class="fab fa-google mr-2"></i> Login with Google
            </button>
            <button type="button" class="flex items-center justify-center w-full px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800">
                <i class="fab fa-apple mr-2"></i> Login with Apple
            </button>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-4 text-sm text-gray-600 dark:text-gray-400">
            Tidak punya akun? 
            <a href="{{ route('register') }}" class="text-indigo-600 hover:underline dark:text-indigo-400">Register</a>
        </div>
    </form>
</x-guest-layout>
