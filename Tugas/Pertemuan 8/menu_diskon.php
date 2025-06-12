<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran UKT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #2c3e50;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            width: 350px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 8px 16px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2471a3;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #ebf5fb;
            border-left: 5px solid #2980b9;
            width: fit-content;
        }
    </style>
</head>
<body>

<h2>Form Diskon Pembayaran UKT Mahasiswa</h2>

<form method="post" action="">
    <label for="npm">NPM:</label>
    <input type="text" name="npm" id="npm" required>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="prodi">Prodi:</label>
    <input type="text" name="prodi" id="prodi" required>

    <label for="semester">Semester:</label>
    <input type="number" name="semester" id="semester" required>

    <label for="ukt">Biaya UKT (Rp):</label>
    <input type="number" name="ukt" id="ukt" required>

    <input type="submit" value="Hitung Diskon">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $semester = (int) $_POST["semester"];
    $ukt = (int) $_POST["ukt"];

    // Hitung diskon
    $diskon_persen = 0;

    if ($ukt >= 5000000) {
        $diskon_persen = 10;
        if ($semester > 8) {
            $diskon_persen = 15;
        }
    }

    $diskon_rupiah = $ukt * ($diskon_persen / 100);
    $total_bayar = $ukt - $diskon_rupiah;

    // Format angka
    function format_rp($angka) {
        return "Rp. " . number_format($angka, 0, ',', '.');
    }

    // Result
    echo "<div class='result'>";
    echo "<strong>Hasil:</strong><br>";
    echo "NPM: $npm<br>";
    echo "Nama: $nama<br>";
    echo "Prodi: $prodi<br>";
    echo "Semester: $semester<br>";
    echo "Biaya UKT: " . format_rp($ukt) . "<br>";
    echo "Diskon: $diskon_persen%<br>";
    echo "Yang Harus Dibayar: " . format_rp($total_bayar) . "<br>";
    echo "</div>";
}
?>

</body>
</html>
