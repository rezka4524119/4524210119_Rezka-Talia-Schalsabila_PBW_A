<?php
// kalkulator.php
$hasil = null;
$pesan = '';
$a = '';
$b = '';
$operator = '+';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aInput = trim((string) ($_POST['a'] ?? ''));
    $bInput = trim((string) ($_POST['b'] ?? ''));
    $operatorInput = (string) ($_POST['operator'] ?? '+');

    $a = $aInput;
    $b = $bInput;

    if ($aInput === '' || $bInput === '' || !is_numeric($aInput) || !is_numeric($bInput)) {
        $pesan = 'Masukkan dua angka yang valid terlebih dahulu.';
    } elseif (!in_array($operatorInput, ['+', '-', '*', '/'], true)) {
        $pesan = 'Operator tidak valid.';
    } else {
        $aAngka = (float) $aInput;
        $bAngka = (float) $bInput;
        $operator = $operatorInput;

        switch ($operator) {
            case '+':
                $hasil = $aAngka + $bAngka;
                break;
            case '-':
                $hasil = $aAngka - $bAngka;
                break;
            case '*':
                $hasil = $aAngka * $bAngka;
                break;
            case '/':
                if ($bAngka == 0.0) {
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
                } else {
                    $hasil = $aAngka / $bAngka;
                }
                break;
        }
    }
}

function e(mixed $nilai): string
{
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}

function formatHasil(float $nilai): string
{
    return rtrim(rtrim(number_format($nilai, 8, '.', ''), '0'), '.');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator Sederhana</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh; padding: 28px 16px;
            display: grid; place-items: center; font-family: "Segoe UI", Arial, sans-serif;
            color: #292344; background: linear-gradient(135deg, #f5efff, #eef4ff);
        }
        .calculator {
            width: min(100%, 440px); padding: 30px; border-radius: 24px;
            background: white; box-shadow: 0 18px 55px rgba(74, 51, 125, .15);
        }
        .icon {
            width: 58px; height: 58px; display: grid; place-items: center;
            border-radius: 18px; color: white; font-size: 28px;
            background: linear-gradient(135deg, #6d4aff, #a06bff);
        }
        .eyebrow { margin: 20px 0 7px; color: #8066dc; font-size: 12px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; }
        h1 { margin: 0; font-size: 30px; }
        .subtitle { margin: 9px 0 25px; color: #817995; line-height: 1.5; }
        label { display: block; margin: 16px 0 8px; font-size: 13px; font-weight: 700; }
        input, select {
            width: 100%; min-height: 48px; padding: 12px 14px; border: 1px solid #e4def2;
            border-radius: 12px; background: #fcfbff; color: #292344; font: inherit; outline: none;
        }
        input:focus, select:focus { border-color: #8a6af7; box-shadow: 0 0 0 3px #eee8ff; }
        .operator-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; align-items: end; }
        button {
            width: 100%; margin-top: 22px; padding: 14px; border: 0; border-radius: 12px;
            color: white; background: linear-gradient(100deg, #6d4aff, #9567f7);
            font: inherit; font-weight: 800; cursor: pointer;
        }
        button:hover { filter: brightness(1.05); }
        .result { margin-top: 20px; padding: 18px; border-radius: 15px; background: #f0ebff; overflow-wrap: anywhere; }
        .result-label { margin-bottom: 7px; color: #776b9a; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; }
        .result-value { color: #5836c5; font-size: 28px; font-weight: 800; }
        .error { margin-top: 18px; padding: 13px 15px; border-radius: 12px; color: #a32645; background: #fff0f3; font-size: 14px; }
        footer { margin-top: 22px; color: #928ba4; text-align: center; font-size: 12px; }
    </style>
</head>
<body>
<main class="calculator">
    <div class="icon">÷</div>
    <p class="eyebrow">PHP · HTTP POST</p>
    <h1>Kalkulator Sederhana</h1>
    <p class="subtitle">Masukkan dua angka, pilih operasi, lalu tekan tombol hitung.</p>

    <form method="post" action="">
        <label for="a">Angka pertama</label>
        <input id="a" type="number" step="any" name="a" value="<?= e($a) ?>" placeholder="Contoh: 12" required>

        <div class="operator-row">
            <div>
                <label for="operator">Operator</label>
                <select id="operator" name="operator">
                    <?php foreach (['+' => 'Tambah (+)', '-' => 'Kurang (−)', '*' => 'Kali (×)', '/' => 'Bagi (÷)'] as $simbol => $nama): ?>
                        <option value="<?= e($simbol) ?>" <?= $operator === $simbol ? 'selected' : '' ?>><?= e($nama) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="b">Angka kedua</label>
                <input id="b" type="number" step="any" name="b" value="<?= e($b) ?>" placeholder="Contoh: 3" required>
            </div>
        </div>

        <button type="submit">Hitung Sekarang →</button>
    </form>

    <?php if ($pesan !== ''): ?>
        <div class="error" role="alert"><?= e($pesan) ?></div>
    <?php elseif ($hasil !== null): ?>
        <div class="result" aria-live="polite">
            <div class="result-label">Hasil perhitungan</div>
            <div class="result-value"><?= e(formatHasil($hasil)) ?></div>
        </div>
    <?php endif; ?>

    <footer>© <?= date('Y') ?> · Kalkulator PHP</footer>
</main>
</body>
</html>
