<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
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
            width: 300px;
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
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #219150;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #eafaf1;
            border-left: 5px solid #27ae60;
            width: fit-content;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Form Input Nilai Mahasiswa</h2>

<form method="post" action="">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama">

    <label for="nilai">Nilai:</label>
    <input type="number" name="nilai" id="nilai">

    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $nilai = $_POST["nilai"];

    if (!empty($nama)) {
        $predikat = "";
        $status = "";

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = "D";
            $status = "Tidak Lulus";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = "E";
            $status = "Tidak Lulus";
        } else {
            $predikat = "Tidak Valid";
            $status = "-";
        }

        echo "<div class='result'>";
        echo "<strong>Hasil:</strong><br>";
        echo "Nama: $nama<br>";
        echo "Nilai: $nilai<br>";
        echo "Predikat: $predikat<br>";
        echo "Status: $status<br>";
        echo "</div>";
    } else {
        echo "<div class='error'>Nama tidak boleh kosong!</div>";
    }
}
?>

</body>
</html>
