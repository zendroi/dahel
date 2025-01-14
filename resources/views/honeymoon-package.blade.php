<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Bulan Madu</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .header img {
            width: 100%;
            border-radius: 10px;
        }

        .content {
            margin-top: 20px;
        }

        .content h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 1rem;
            color: #555;
        }

        .packages {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .package {
            flex: 1;
            text-align: center;
        }

        .package img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .package h3 {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        .package p {
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/honeymoon_header.jpg') }}" alt="Paket Bulan Madu">
        </div>
        <div class="content">
            <h1>Paket Bulan Madu</h1>
            <p>Nikmati pengalaman romantis terbaik bersama pasangan Anda.</p>
            <h2>Tentang Paket</h2>
            <p>Nikmati makan malam romantis, spa pasangan, dan tur pribadi dengan pengalaman tak terlupakan.</p>
            <h2>Harga Mulai dari</h2>
            <p>Rp 5.000.000</p>
            <div class="packages">
                @foreach ($packages as $package)
                    <div class="package">
                        <img src="{{ asset('images/' . $package['image']) }}" alt="{{ $package['name'] }}">
                        <h3>{{ $package['name'] }}</h3>
                        <p>{{ $package['location'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
