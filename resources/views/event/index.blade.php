<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .categories {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .category {
            background-color: #f3f3f3;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
            display: inline-block;
        }

        .events {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .event-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .event-card .details {
            padding: 15px;
        }

        .event-card .details h3 {
            margin: 0 0 10px;
        }

        .event-card .details p {
            margin: 0;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Event</h1>
        <div class="search-bar">
            <input type="text" placeholder="Cari event atau lokasi"
                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 10px;">
        </div>
        <div class="categories">
            <div class="category">Festival Budaya</div>
            <div class="category">Upacara Adat</div>
            <div class="category">Workshop</div>
            <div class="category">Masa Panen</div>
        </div>
        <div class="events">
            @foreach ($events as $event)
                <div class="event-card">
                    <img src="{{ asset('images/' . $event['image']) }}" alt="{{ $event['title'] }}">
                    <div class="details">
                        <h3>{{ $event['title'] }}</h3>
                        <p>{{ $event['location'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
