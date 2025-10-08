<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Ulang SMK "Pasti Bisa"</title>
</head>
<body>

<h2>Pendaftaran Ulang SMK "Pasti Bisa"</h2>

<form method="post">
    Nama Siswa: <br>
    <input type="text" name="nama" required><br><br>

    Nomor Induk (10 digit): <br>
    <input type="text" name="nis" maxlength="10" pattern="\d{10}" title="Harus 10 digit angka" required><br><br>

    Kelas: <br>
    <select name="kelas" required>
        <option value="">-- Pilih Kelas --</option>
        <option value="1">Kelas 1</option>
        <option value="2">Kelas 2</option>
        <option value="3">Kelas 3</option>
    </select><br><br>

    <input type="submit" name="submit" value="Hitung Total">
    <input type="button" value="Reset" onclick="window.location.href=window.location.href">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];

    // Validasi NIS harus 10 digit angka
    if (!preg_match("/^[0-9]{10}$/", $nis)) {
        echo "<hr>";
        echo "<p style='color:red;'><b>Error:</b> Nomor Induk harus terdiri dari tepat 10 digit angka!</p>";
        exit;
    }

    // Inisialisasi biaya
    $uang_gedung = 0;
    $spp = 0;
    $seragam = 0;

    // Struktur CASE (Switch)
    switch ($kelas) {
        case '1':
            $uang_gedung = 800000;
            $spp = 90000;
            $seragam = 125000;
            break;

        case '2':
            $uang_gedung = 500000;
            $spp = 75000;
            $seragam = 100000;
            break;

        case '3':
            $uang_gedung = 500000;
            $spp = 75000;
            $seragam = 100000;
            break;

        default:
            echo "<p>Kelas tidak valid!</p>";
            exit;
    }

    $total = $uang_gedung + $spp + $seragam;

    echo "<hr>";
    echo "<h3>Hasil Perhitungan</h3>";
    echo "Nama Siswa: $nama <br>";
    echo "Nomor Induk: $nis <br>";
    echo "Kelas: $kelas <br><br>";

    echo "Uang Gedung: Rp " . number_format($uang_gedung, 0, ',', '.') . "<br>";
    echo "SPP Bulan Juli: Rp " . number_format($spp, 0, ',', '.') . "<br>";
    echo "Seragam: Rp " . number_format($seragam, 0, ',', '.') . "<br><br>";

    echo "<b>Total Biaya: Rp " . number_format($total, 0, ',', '.') . "</b>";
}
?>

</body>
</html>