<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaraPress - Beranda</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #fff7fa;
            color: #3f2933;
        }

        /* NAVBAR */
        nav {
            width: 100%;
            padding: 20px 8%;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #fce1e9;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #d85c83;
            letter-spacing: 0.5px;
        }

        .logo span {
            color: #f19ab5;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #6b4b58;
            text-decoration: none;
            font-size: 15px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #d85c83;
        }

        .nav-links .active {
            color: #d85c83;
            font-weight: bold;
        }

        /* HERO */
        .hero {
            min-height: 600px;
            display: flex;
            align-items: center;
            padding: 70px 8%;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            width: 55%;
            z-index: 2;
        }

        .badge {
            display: inline-block;
            padding: 9px 18px;
            background: #ffe5ee;
            color: #d85c83;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: 56px;
            line-height: 1.15;
            color: #472d38;
            margin-bottom: 22px;
        }

        .hero h1 span {
            color: #d85c83;
        }

        .hero p {
            color: #866b76;
            font-size: 17px;
            line-height: 1.8;
            max-width: 570px;
            margin-bottom: 32px;
        }

        /* BUTTON */
        .buttons {
            display: flex;
            gap: 12px;
        }

        .button {
            display: inline-block;
            text-decoration: none;
            padding: 14px 25px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }

        .primary {
            background: #d85c83;
            color: white;
            box-shadow: 0 8px 20px rgba(216, 92, 131, 0.25);
        }

        .primary:hover {
            background: #c94d74;
            transform: translateY(-2px);
        }

        .secondary {
            background: white;
            color: #d85c83;
            border: 1px solid #f3bfd0;
        }

        .secondary:hover {
            background: #fff0f5;
        }

        /* DECORATION */
        .hero-decoration {
            position: absolute;
            right: 7%;
            width: 360px;
            height: 360px;
            background: #ffdce8;
            border-radius: 50%;
        }

        .hero-card {
            position: absolute;
            right: 12%;
            width: 290px;
            padding: 35px;
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(170, 83, 112, 0.15);
            text-align: center;
            z-index: 2;
        }

        .hero-icon {
    width: 110px;
    height: 110px;
    background: #ffe7ef;
    border-radius: 50%;
    padding: 5px;
    margin: 0 auto 20px;
    overflow: hidden;
    border: 4px solid #ffd2df;
}

.hero-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}

        .hero-card h3 {
            color: #4a303b;
            margin-bottom: 10px;
        }

        .hero-card p {
            color: #92727f;
            font-size: 14px;
            line-height: 1.6;
        }

        /* INFO SECTION */
        .info-section {
            padding: 70px 8%;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 32px;
            color: #472d38;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #92727f;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            width: 280px;
            padding: 30px;
            background: #fff8fb;
            border: 1px solid #fce0e9;
            border-radius: 18px;
            text-align: center;
        }

        .card-icon {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #543541;
            margin-bottom: 10px;
        }

        .card p {
            color: #92727f;
            font-size: 14px;
            line-height: 1.7;
        }

        /* FOOTER */
        footer {
            background: #472d38;
            color: #fce7ee;
            text-align: center;
            padding: 25px;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {

            .nav-links {
                gap: 12px;
            }

            .hero {
                padding: 60px 7%;
            }

            .hero-content {
                width: 100%;
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .buttons {
                justify-content: center;
            }

            .hero-decoration,
            .hero-card {
                display: none;
            }

            .hero h1 {
                font-size: 42px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <div class="logo">
            Lara<span>Press</span>
        </div>

        <div class="nav-links">
            <a href="/" class="active">Home</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <span class="badge">
                🌸 PBW A • LARAVEL 12
            </span>

            <h1>
                Selamat Datang di
                <span>LaraPress</span>
            </h1>

            <p>
                Sebuah proyek blog sederhana untuk mempelajari
                dasar-dasar pengembangan web menggunakan framework
                Laravel 12.
            </p>

            <div class="buttons">

                <a href="/tentang-kami" class="button primary">
                    Kenali LaraPress →
                </a>

                <a href="/kontak" class="button secondary">
                    Hubungi Kami
                </a>

            </div>

        </div>


        <!-- DECORATIVE CIRCLE -->
        <div class="hero-decoration"></div>


        <!-- FLOATING CARD -->
        <div class="hero-card">

            <div class="hero-icon">
                <img src="/rezka.jpg" alt="Foto LaraPress">
            </div>

            <h3>
                Rezka Talia Schalsabila 4524210119
            </h3>

            <p>
                Belajar Laravel dengan membuat
                aplikasi sederhana yang mudah dipahami.
            </p>

        </div>

    </section>


    <!-- INFORMATION -->
    <section class="info-section">

        <div class="section-title">

            <h2>
                Apa yang Dipelajari?
            </h2>

            <p>
                Dasar-dasar Laravel melalui proyek LaraPress.
            </p>

        </div>


        <div class="cards">

            <div class="card">

                <div class="card-icon">
                    🛣️
                </div>

                <h3>
                    Route
                </h3>

                <p>
                    Mendefinisikan alamat atau URL
                    yang dapat diakses oleh pengguna.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">
                    🎨
                </div>

                <h3>
                    View
                </h3>

                <p>
                    Membuat tampilan halaman menggunakan
                    HTML dan Blade.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">
                    🔄
                </div>

                <h3>
                    Request → Response
                </h3>

                <p>
                    Memahami alur dasar permintaan
                    hingga menghasilkan halaman web.
                </p>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        © 2026 LaraPress • Laravel 12 Learning Project

    </footer>

</body>
</html>