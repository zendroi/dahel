<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .hero {
            background-image: url('/images/village.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Hero Section -->
        <div class="hero mb-4">
            <div class="hero-overlay">
                <h1>{{ $data['title'] }}</h1>
            </div>
        </div>

        <!-- Festival Details -->
        <h2>{{ $data['title'] }}</h2>
        <p><strong>Lokasi:</strong> {{ $data['location'] }}</p>
        <p><strong>Tanggal:</strong> {{ $data['date'] }}</p>
        <p>{{ $data['description'] }}</p>
        <button class="btn btn-warning mb-4">Tambah ke Kalender</button>

        <!-- Jadwal Acara -->
        <h3>Jadwal Acara</h3>
        <ul class="list-group mb-4">
            @foreach ($data['schedule'] as $event)
                <li class="list-group-item">
                    <strong>{{ $event['time'] }}</strong> - {{ $event['activity'] }}
                </li>
            @endforeach
        </ul>

        <!-- Galeri Foto -->
        <h3>Galeri Foto</h3>
        <div class="row">
            @foreach ($data['gallery'] as $image)
                <div class="col-md-4 mb-3">
                    <img src="{{ $image }}" class="img-fluid rounded" alt="Galeri Foto">
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
