<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami - LaraPress</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #fff7fa;
            color: #472d38;
        }

        nav {
            padding: 20px 8%;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #fce1e9;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #d85c83;
        }

        .logo span {
            color: #f19ab5;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #6b4b58;
            font-size: 15px;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: #d85c83;
            font-weight: bold;
        }

        .about {
            max-width: 1050px;
            margin: 70px auto;
            padding: 20px;
        }

        .about-header {
            text-align: center;
            margin-bottom: 45px;
        }

        .about-header span {
            color: #d85c83;
            font-size: 14px;
            font-weight: bold;
        }

        .about-header h1 {
            font-size: 42px;
            margin: 12px 0;
            color: #472d38;
        }

        .about-header p {
            color: #92727f;
        }

        .about-content {
            display: flex;
            gap: 35px;
            align-items: stretch;
        }

        .main-card {
            flex: 1.4;
            background: white;
            padding: 40px;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(170, 83, 112, 0.09);
        }

        .main-card h2 {
            color: #d85c83;
            margin-bottom: 20px;
        }

        .main-card p {
            color: #80636f;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .side-card {
            flex: 0.8;
            background: #ffe5ee;
            padding: 40px;
            border-radius: 22px;
        }

        .side-card h3 {
            color: #b9436a;
            margin-bottom: 25px;
        }

        .feature {
            margin-bottom: 22px;
        }

        .feature strong {
            display: block;
            color: #543541;
            margin-bottom: 5px;
        }

        .feature span {
            color: #866b76;
            font-size: 14px;
            line-height: 1.5;
        }

        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 13px 24px;
            background: #d85c83;
            color: white;
            text-decoration: none;
            border-radius: 9px;
            font-weight: bold;
        }

        .button:hover {
            background: #c94d74;
        }

        footer {
            background: #472d38;
            color: #fce7ee;
            text-align: center;
            padding: 25px;
            font-size: 13px;
            margin-top: 80px;
        }

        @media (max-width: 800px) {

            .about-content {
                flex-direction: column;
            }

            .about-header h1 {
                font-size: 34px;
            }

        }

    </style>

</head>


<body>

    <nav>

        <div class="logo">
            Lara<span>Press</span>
        </div>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/tentang-kami" class="active">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </div>

    </nav>


    <section class="about">

        <div class="about-header">

            <span>ABOUT LARAPRESS</span>

            <h1>
                Mengenal LaraPress
            </h1>

            <p>
                Proyek sederhana untuk belajar dasar-dasar Laravel 12.
            </p>

        </div>


        <div class="about-content">

            <div class="main-card">

                <h2>
                    🌸 Apa itu LaraPress?
                </h2>

                <p>
                    LaraPress adalah sebuah proyek blog sederhana
                    yang dibuat untuk mempelajari dasar-dasar
                    framework Laravel 12.
                </p>

                <p>
                    Melalui proyek ini, kita mempelajari bagaimana
                    sebuah request dari browser diproses melalui
                    Route dan kemudian menghasilkan View sebagai
                    response kepada pengguna.
                </p>

                <a href="/kontak" class="button">
                    Hubungi Kami →
                </a>

            </div>


            <div class="side-card">

                <h3>
                    Yang Dipelajari
                </h3>

                <div class="feature">
                    <strong>🛣️ Routing</strong>
                    <span>
                        Mendefinisikan URL pada aplikasi Laravel.
                    </span>
                </div>

                <div class="feature">
                    <strong>🎨 Blade View</strong>
                    <span>
                        Membuat tampilan halaman menggunakan Blade.
                    </span>
                </div>

                <div class="feature">
                    <strong>⚡ Laravel 12</strong>
                    <span>
                        Mengenal struktur dasar framework Laravel.
                    </span>
                </div>

            </div>

        </div>

    </section>


    <footer>

        © 2026 LaraPress • Laravel 12 Learning Project

    </footer>

</body>

</html>