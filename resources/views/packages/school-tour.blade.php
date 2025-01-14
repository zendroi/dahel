<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-img {
            width: 80%;
            height: 80%;
            border-radius: 8px;
        }

        .package-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
        }

        .section-title {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <!-- Header Image -->
        <div class="text-center mb-4">
            <img src="{{ asset($headerImage) }}" alt="{{ $title }}" class="header-img">
            <h1 class="mt-3">{{ $title }}</h1>
            <p>{{ $description }}</p>
        </div>

        <!-- Tentang Paket -->
        <div class="mb-4">
            <h2 class="section-title">Tentang Paket</h2>
            <p>{{ $description }}</p>
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <h2 class="section-title">Harga Mulai dari</h2>
            <p class="section-subtitle">{{ $price }}</p>
        </div>

        <!-- Images -->
        <div class="row">
            @foreach ($packages as $package)
                <div class="col-md-6 mb-4">
                    <img src="{{ asset($package['image']) }}" alt="{{ $package['name'] }}" class="package-img">
                    <p class="text-center mt-2">{{ $package['name'] }}<br>
                        <small>{{ $package['location'] }}</small>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
