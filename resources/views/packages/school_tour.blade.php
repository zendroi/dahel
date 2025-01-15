@extends('layouts.main')

@section('title', 'Tur Sekolah')

@section('content')
    <div class="container mt-5">
        <!-- Header Image -->
        <div class="text-center mb-5">
            <img src="{{ asset($headerImage) }}" alt="{{ $title }}" class="img-fluid rounded mb-3" style="max-height: 300px; object-fit: cover;">
            <h1 class="font-weight-bold">{{ $title }}</h1>
            <p class="text-muted">{{ $description }}</p>
        </div>

        <!-- Tentang Paket -->
        <div class="text-center mb-5">
            <h2 class="section-title font-weight-bold">Tentang Paket</h2>
            <p class="text-muted">{{ $description }}</p>
        </div>

        <!-- Harga -->
        <div class="text-center mb-5">
            <h2 class="section-title font-weight-bold">Harga Mulai dari</h2>
            <p class="section-subtitle text-success font-weight-bold" style="font-size: 1.5rem;">Rp {{ number_format(500000, 0, ',', '.') }}</p>
        </div>

        <!-- Paket List -->
        <div class="row">
            @foreach ($packages as $package)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($package['image']) }}" alt="{{ $package['name'] }}" class="card-img-top rounded-top" style="max-height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">{{ $package['name'] }}</h5>
                            <p class="card-text text-muted">{{ $package['location'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
