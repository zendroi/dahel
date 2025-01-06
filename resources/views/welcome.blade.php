<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        JeDaTravel
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            color: #333333;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            border-bottom: 1px solid #E5E5E5;
        }

        header .logo {
            font-size: 24px;
            font-weight: 700;
        }

        header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333333;
            font-weight: 600;
        }

        header .sign-up {
            background-color: #a80000;
            color: #FFFFFF;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            background-color: #F9F9F9;
        }

        .hero img {
            max-width: 100%;
            height: auto;
        }

        .hero .content {
            max-width: 50%;
        }

        .hero .content h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero .content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero .content .cta {
            background-color: #10aa71;
            color: #FFFFFF;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
        }

        .features,
        .recommendations,
        .easy-booking,
        .testimonials {
            padding: 40px;
        }

        .features h2,
        .recommendations h2,
        .easy-booking h2,
        .testimonials h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .features p,
        .easy-booking p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .features .feature-list,
        .recommendations .destination-list,
        .testimonials .testimonial-list {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .features .feature,
        .recommendations .destination,
        .testimonials .testimonial {
            background-color: #FFFFFF;
            border: 1px solid #E5E5E5;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            flex: 1 1 22%;
            box-sizing: border-box;
        }

        .features .feature i,
        .testimonials .testimonial i {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .recommendations .destination img,
        .easy-booking img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .recommendations .destination h3,
        .testimonials .testimonial h3 {
            font-size: 18px;
            font-weight: 600;
            margin: 10px 0;
        }

        .recommendations .destination p,
        .testimonials .testimonial p {
            font-size: 16px;
        }

        .testimonials .testimonial img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .testimonials .testimonial .info {
            display: flex;
            align-items: center;
        }

        .testimonials .testimonial .info .name {
            font-weight: 600;
        }

        .testimonials .testimonial .info .date {
            font-size: 14px;
            color: #999999;
        }

        .partners {
            display: flex;
            justify-content: space-between;
            padding: 40px;
        }

        .partners img {
            max-width: 100px;
            height: auto;
        }

        footer {
            padding: 20px 40px;
            background-color: #F9F9F9;
            text-align: center;
            font-size: 14px;
            color: #999999;
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero .content {
                max-width: 100%;
            }

            .features .feature,
            .recommendations .destination,
            .testimonials .testimonial {
                flex: 1 1 100%;
            }

            .partners {
                flex-direction: column;
                align-items: center;
            }

            .partners img {
                margin-bottom: 20px;
            }
        }
    .easy-booking-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
        flex: 1;
    }

    .easy-booking-content h2 {
        font-size: 32px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .easy-booking-content p {
        font-size: 25px;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            JeDa Travel
        </div>
        <nav>
            <a href="#">
                Home
            </a>
            <a href="#">
                About
            </a>
            <a href="#">
                Contact
            </a>
        </nav>
        <a class="sign-up" href="{{ route('login') }}">
            Sign Up
        </a>
    </header>
    <section class="hero">
        <div class="content">
            <h1>
                Eksplorasi Tanpa Batas di Nusantara
            </h1>
            <p>
                Temukan pengalaman wisata yang menakjubkan, mulai dari pantai tropis hingga pegunungan yang memukau.
                Semua dalam satu platform.
            </p>
            <a class="cta" href="#">
                Start Your Journey
            </a>
        </div>
        <img alt="Illustration of a beautiful landscape with mountains and trees" height="40"
            src="https://storage.googleapis.com/a1aa/image/b7IBlZSTiq7tLZ4adEpdJ4eS5eTv2KMl9KgrFkaT4hcs4d8TA.jpg"
            width="400" />
    </section>
    <section class="features">
        <h2>
            Bersama JeDa, Temukan Keajaiban Nusantara
        </h2>
        <p>
            Layanan lengkap untuk pengalaman perjalanan terbaik.
        </p>
        <div class="feature-list">
            <div class="feature">
                <i class="fas fa-info-circle">
                </i>
                <h3>
                    Informasi Lengkap
                </h3>
                <p>
                    Semua yang Anda butuhkan untuk perjalanan.
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-map-signs">
                </i>
                <h3>
                    Paket Wisata Pilihan
                </h3>
                <p>
                    Pilih dari berbagai paket terbaik.
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-tags">
                </i>
                <h3>
                    Harga Kompetitif
                </h3>
                <p>
                    Harga yang sesuai dengan anggaran.
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-headset">
                </i>
                <h3>
                    Pelayanan Pelanggan 24/7
                </h3>
                <p>
                    Dukungan kapan saja Anda butuhkan.
                </p>
            </div>
        </div>
    </section>
    <section class="recommendations">
        <h2>
            Rekomendasi Destinasi Wisata Terbaik
        </h2>
        <div class="destination-list">
            <div class="destination">
                <img alt="Candi Borobudur" height="200"
                    src="https://storage.googleapis.com/a1aa/image/vhnv9rb5XBJPOJeflVOGOULzCjI025uKfnR9Sx8hQBYfi3xPB.jpg"
                    width="300" />
                <h3>
                    Candi Borobudur
                </h3>
                <p>
                    Mulai dari Rp 500.000
                </p>
            </div>
            <div class="destination">
                <img alt="Raja Ampat" height="200"
                    src="https://storage.googleapis.com/a1aa/image/YE7Ll3NTzvYoItp5eoiyWX5rNnHsGhPrVpaUMdnedK5m4d8TA.jpg"
                    width="300" />
                <h3>
                    Raja Ampat
                </h3>
                <p>
                    Mulai dari Rp 1.000.000
                </p>
            </div>
            <div class="destination">
                <img alt="Pantai Kuta" height="200"
                    src="https://storage.googleapis.com/a1aa/image/cJB8JXC0Zp4GJ5zFNKHwlAWUab3swrq9Z38smDWNqfiY8OeTA.jpg"
                    width="300" />
                <h3>
                    Pantai Kuta
                </h3>
                <p>
                    Mulai dari Rp 300.000
                </p>
            </div>
        </div>
    </section>
    <section class="easy-booking d-flex ">
        <div class="easy-booking-content">
            <h2>
                Mudah dan Cepat
            </h2>
            <p>
                Pesan Perjalanan Impian Anda Dengan Mudah Di JeDa Travel
            </p>
            <p>
                Pilih tujuan, pesan tiket, dan nikmati perjalanan.
            </p>
        </div>
        <div>
            <a class="cta" href="#">
            </a>
            <img alt="Booking process illustration" height="400"
                src="https://storage.googleapis.com/a1aa/image/mQfEkuS7Rekhp0aLQvXszu3kNLmU5FdrC5qH9jhkovEq4d8TA.jpg"
                width="600" />
        </div>
    </section>
    <section class="testimonials">
        <h2>
            Apa Kata Mereka?
        </h2>
        <div class="testimonial-list">
            <div class="testimonial">
                <div class="info">
                    <img alt="Profile picture of Andik Riswanto" height="50"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNKfj6RsyRZqO4nnWkPFrYMmgrzDmyG31pFQ&s"
                        width="55" />
                    <div>
                        <div class="name">
                            Andik Riswanto
                        </div>
                        <div class="date">
                            1 days ago
                        </div>
                    </div>
                </div>
                <p>
                    Pengalaman luar biasa dan menarik Proses pemesanan mudah dan layanan pelanggan sangat membantu.
                </p>
                <div>
                    <i class="fas fa-thumbs-up">
                    </i>
                    200
                    <i class="fas fa-comment">
                    </i>
                    105
                </div>
            </div>
        </div>
    </h2>
    <div class="testimonial-list">
        <div class="testimonial">
            <div class="info">
                <img alt="Profile picture of " height="50"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNKfj6RsyRZqO4nnWkPFrYMmgrzDmyG31pFQ&s"
                    width="55" />
                <div>
                    <div class="name">
                        Suprianto Santoso
                    </div>
                    <div class="date">
                        2 days ago
                    </div>
                </div>
            </div>
            <p>
                Aman dan cepat harga terjangkau dan sangat memuaskan.
            </p>
            <div>
                <i class="fas fa-thumbs-up">
                </i>
                60
                <i class="fas fa-comment">
                </i>
                30
            </div>
        </div>
    </div>
    </section>
    <section class="partners">
    </section>
    <footer>
        <p>
            © 2024 JeDa Travel. All rights reserved.
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
