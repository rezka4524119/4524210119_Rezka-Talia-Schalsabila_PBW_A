<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - LaraPress</title>

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
            color: #6b4b58;
            text-decoration: none;
            font-size: 15px;
        }

        .nav-links a:hover,
        .nav-links .active {
            color: #d85c83;
            font-weight: bold;
        }

        .contact {
            max-width: 1050px;
            margin: 70px auto;
            padding: 20px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 45px;
        }

        .contact-header span {
            color: #d85c83;
            font-weight: bold;
            font-size: 14px;
        }

        .contact-header h1 {
            font-size: 42px;
            margin: 12px 0;
        }

        .contact-header p {
            color: #92727f;
        }

        .contact-content {
            display: flex;
            gap: 30px;
        }

        .contact-info {
            flex: 1;
            background: #d85c83;
            color: white;
            padding: 40px;
            border-radius: 22px;
        }

        .contact-info h2 {
            margin-bottom: 15px;
        }

        .contact-info > p {
            color: #ffeaf1;
            line-height: 1.7;
            margin-bottom: 35px;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .info-icon {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.18);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            margin-right: 15px;
        }

        .info-item strong {
            display: block;
            margin-bottom: 4px;
        }

        .info-item span {
            font-size: 14px;
            color: #ffeaf1;
        }

        .contact-card {
            flex: 1;
            background: white;
            padding: 40px;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(170, 83, 112, 0.09);
        }

        .contact-card h2 {
            margin-bottom: 10px;
        }

        .contact-card p {
            color: #92727f;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .message-box {
            background: #fff0f5;
            border: 1px solid #fbd9e5;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .message-box h3 {
            color: #c64f76;
            margin-bottom: 10px;
        }

        .message-box p {
            margin: 0;
            font-size: 14px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 13px 22px;
            background: #d85c83;
            color: white;
            text-decoration: none;
            border-radius: 9px;
            font-weight: bold;
            font-size: 14px;
        }

        .button.secondary {
            background: #ffe5ee;
            color: #c64f76;
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

            .contact-content {
                flex-direction: column;
            }

            .contact-header h1 {
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
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak" class="active">Kontak</a>
        </div>

    </nav>


    <section class="contact">

        <div class="contact-header">

            <span>CONTACT US</span>

            <h1>
                Hubungi LaraPress
            </h1>

            <p>
                Silakan hubungi kami melalui informasi berikut.
            </p>

        </div>


        <div class="contact-content">

            <div class="contact-info">

                <h2>
                    Mari Terhubung 🌷
                </h2>

                <p>
                    Jika memiliki pertanyaan mengenai LaraPress,
                    silakan gunakan informasi kontak berikut.
                </p>


                <div class="info-item">

                    <div class="info-icon">
                        📧
                    </div>

                    <div>
                        <strong>Email</strong>
                        <span>
                            rezka4524119@univpancasila.ac.id
                        </span>
                    </div>

                </div>


                <div class="info-item">

                    <div class="info-icon">
                        📱
                    </div>

                    <div>
                        <strong>Telepon</strong>
                        <span>
                            0812-3456-7890
                        </span>
                    </div>

                </div>


                <div class="info-item">

                    <div class="info-icon">
                        📍
                    </div>

                    <div>
                        <strong>Lokasi</strong>
                        <span>
                            Jakarta, Indonesia
                        </span>
                    </div>

                </div>

            </div>


            <div class="contact-card">

                <h2>
                    Informasi Kontak
                </h2>

                <p>
                    Informasi berikut merupakan data kontak
                    fiktif yang digunakan sebagai bagian dari
                    tugas praktikum.
                </p>


                <div class="message-box">

                    <h3>
                        💌 LaraPress
                    </h3>

                    <p>
                        Terima kasih telah mengunjungi
                        halaman LaraPress.
                    </p>

                </div>


                <div class="buttons">

                    <a href="/" class="button">
                        ← Beranda
                    </a>

                    <a href="/tentang-kami" class="button secondary">
                        Tentang Kami
                    </a>

                </div>

            </div>

        </div>

    </section>


    <footer>

        © 2026 LaraPress • Laravel 12 Learning Project

    </footer>

</body>

</html>