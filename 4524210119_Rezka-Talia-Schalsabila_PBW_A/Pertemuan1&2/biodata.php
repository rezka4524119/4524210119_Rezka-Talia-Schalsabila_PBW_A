<?php
// biodata.php
function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'nim' => '4524210119',
    'nama' => 'Rezka Talia Schalsabila',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.85
];

function e(mixed $nilai): string
{
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}

$predikat = statusKelulusan((float) $mahasiswa['ipk']);
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Mahasiswa | Rezka</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh; padding: 32px 18px;
            font-family: "Segoe UI", Arial, sans-serif; color: #292344;
            background: linear-gradient(135deg, #f5efff, #eef4ff);
            display: grid; place-items: center;
        }
        .card {
            width: min(100%, 720px); overflow: hidden; border-radius: 24px;
            background: #fff; box-shadow: 0 18px 55px rgba(74, 51, 125, .14);
        }
        .hero {
            padding: 34px; color: white;
            background: linear-gradient(125deg, #6d4aff, #a06bff);
        }
        .eyebrow { margin: 0 0 10px; opacity: .85; font-size: 13px; letter-spacing: 2px; text-transform: uppercase; }
        h1 { margin: 0; font-size: clamp(26px, 5vw, 38px); }
        .hero p:last-child { margin-bottom: 0; opacity: .9; }
        .content { padding: 28px 34px 34px; }
        .profile { display: flex; align-items: center; gap: 18px; margin-bottom: 26px; }
        .avatar {
            width: 76px; height: 76px; border-radius: 22px; flex-shrink: 0;
            display: grid; place-items: center; color: #fff; font-size: 28px; font-weight: 800;
            background: linear-gradient(135deg, #9275ff, #d0a5ff);
        }
        .profile h2 { margin: 0 0 5px; font-size: 22px; }
        .profile p { margin: 0; color: #77718d; }
        .details { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px; }
        .item { padding: 17px; border: 1px solid #eee9fa; border-radius: 16px; background: #fcfbff; }
        .label { margin-bottom: 8px; color: #817995; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; }
        .value { overflow-wrap: anywhere; font-size: 16px; font-weight: 700; }
        .score { margin-top: 18px; padding: 20px; border-radius: 16px; background: #f0ebff; }
        .score-top { display: flex; align-items: center; justify-content: space-between; gap: 12px; }
        .score h3 { margin: 0; font-size: 15px; }
        .badge { padding: 7px 11px; border-radius: 999px; background: #ded3ff; color: #5737c8; font-size: 12px; font-weight: 700; }
        .bar { height: 9px; margin-top: 14px; overflow: hidden; border-radius: 99px; background: #ddd4f8; }
        .bar span { display: block; width: <?= min(100, max(0, ((float)$mahasiswa['ipk'] / 4) * 100)) ?>%; height: 100%; border-radius: inherit; background: linear-gradient(90deg, #7655f5, #bd82ff); }
        footer { padding-top: 24px; color: #928ba4; text-align: center; font-size: 12px; }
        @media (max-width: 520px) {
            .hero, .content { padding: 24px; }
            .details { grid-template-columns: 1fr; }
            .profile { align-items: flex-start; }
            .avatar { width: 60px; height: 60px; border-radius: 18px; }
            .score-top { align-items: flex-start; flex-direction: column; }
        }
    </style>
</head>
<body>
<main class="card">
    <header class="hero">
        <p class="eyebrow">Profil Mahasiswa</p>
        <h1>Biodata Mahasiswa</h1>
        <p>Informasi akademik dan identitas mahasiswa.</p>
    </header>

    <section class="content">
        <div class="profile">
            <div class="avatar">RT</div>
            <div>
                <h2><?= e($mahasiswa['nama']) ?></h2>
                <p><?= e($mahasiswa['prodi']) ?></p>
            </div>
        </div>

        <div class="details">
            <div class="item">
                <div class="label">NIM</div>
                <div class="value"><?= e($mahasiswa['nim']) ?></div>
            </div>
            <div class="item">
                <div class="label">Program Studi</div>
                <div class="value"><?= e($mahasiswa['prodi']) ?></div>
            </div>
            <div class="item">
                <div class="label">Semester</div>
                <div class="value"><?= e($mahasiswa['semester']) ?></div>
            </div>
            <div class="item">
                <div class="label">IPK</div>
                <div class="value"><?= number_format((float) $mahasiswa['ipk'], 2, ',', '.') ?> / 4,00</div>
            </div>
        </div>

        <div class="score">
            <div class="score-top">
                <h3>Predikat Akademik</h3>
                <span class="badge"><?= e($predikat) ?></span>
            </div>
            <div class="bar"><span></span></div>
        </div>

        <footer>© <?= date('Y') ?> · Biodata Mahasiswa · Dibuat dengan PHP</footer>
    </section>
</main>
</body>
</html>
