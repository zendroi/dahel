<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .card-img {
            width: 100%;
            border-radius: 8px;
        }

        .promo {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
        }

        .promo h5 {
            font-weight: bold;
        }

        .btn-custom {
            background-color: #ff7c57;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #e56b4e;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Rekomendasi Destinasi</h1>
        <h5>Destinasi Disekitarmu</h5>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/pantai_kuta.jpg') }}" alt="Pantai_Kuta"class="card-img">
                    <div class="card-body">
                        <h6 class="card-title">Pantai Kuta</h6>
                        <p class="card-text">Vacation in Paradise</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/candi_prambanan.jpg') }}" alt="candi_prambanan"
                        class="card-img">
                    <div class="card-body">
                        <h6 class="card-title">Candi Prambanan</h6>
                        <p class="card-text">Cultural Heritage</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/desa_pelangi.jpg') }}" alt="desa_pelangi"
                        class="card-img">
                    <div class="card-body">
                        <h6 class="card-title">Desa Pelangi</h6>
                        <p class="card-text">Vibrant City Life</p>
                    </div>
                </div>
            </div>
        </div>
        <h5>Paket Wisata</h5>
        <div class="row text-center mb-4">
            <div class="col-md-3">
                <button class="btn btn-custom">Paket Bulan Madu</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-custom">Bersama Jelajah</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-custom">Paket Keluarga</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-custom">Tur Sekolah</button>
            </div>
        </div>
        <div class="promo">
            <h5>Promo Spesial</h5>
            <p>Diskon 20% untuk paket Bali<br><small>Berlaku hingga akhir bulan ini</small></p>
            <p>Promo Beli 1 Gratis 1 untuk paket Candi<br><small>Khusus untuk pengguna baru</small></p>
        </div>
    </div>
</body>

</html>
