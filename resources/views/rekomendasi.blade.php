@extends('layouts.main')

@section('title', 'Rekomendasi Destinasi')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Rekomendasi Destinasi</h1>
    <h5 class="text-center text-muted mb-5">Temukan destinasi menarik di sekitarmu</h5>

    <!-- Destinasi Cards -->
    <div class="row mb-5">
        <!-- Pantai Kuta -->
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/pantai_kuta.jpg') }}" alt="Pantai Kuta" class="card-img-top rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Pantai Kuta</h5>
                        <p class="card-text text-muted">Vacation in Paradise</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Candi Prambanan -->
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/candi_prambanan.jpg') }}" alt="Candi Prambanan" class="card-img-top rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Candi Prambanan</h5>
                        <p class="card-text text-muted">Cultural Heritage</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Desa Pelangi -->
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/desa_pelangi.jpg') }}" alt="Desa Pelangi" class="card-img-top rounded">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Desa Pelangi</h5>
                        <p class="card-text text-muted">Vibrant City Life</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Paket Wisata -->
    <h5 class="mb-4">Paket Wisata</h5>
    <div class="row text-center mb-5">
        <div class="col-md-3">
            <a href="{{ route('honeymoon_package') }}" class="btn btn-outline-primary btn-block">Paket Bulan Madu</a>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-primary btn-block">Bersama Jelajah</button>
        </div>
        <div class="col-md-3">
            <button class="btn btn-outline-primary btn-block">Paket Keluarga</button>
        </div>
        <div class="col-md-3">
            <a href="{{ route('packages') }}" class="btn btn-outline-primary btn-block">Tur Sekolah</a>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="promo bg-light p-4 rounded shadow-sm">
        <h5 class="text-primary">Promo Spesial</h5>
        <ul class="list-unstyled mt-3">
            <li class="mb-2">
                <strong>Diskon 20%</strong> untuk paket Bali<br>
                <small class="text-muted">Berlaku hingga akhir bulan ini</small>
            </li>
            <li>
                <strong>Promo Beli 1 Gratis 1</strong> untuk paket Candi<br>
                <small class="text-muted">Khusus untuk pengguna baru</small>
            </li>
        </ul>
    </div>
</div>
@endsection
