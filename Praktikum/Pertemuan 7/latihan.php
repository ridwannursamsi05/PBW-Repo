<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <?php
    // $nama = "Budi";
    // $umur = 20;
    
    // Menampilkan nilai variabel
    // echo "Nama: " . $nama . "<br>";
    // echo "Umur: " . $umur . " tahun<br>";

    $nama = "Andi";
    $umur = 20;
    $barang = ["Keyboard" => 10000];
    $barangbeli = $barang["Keyboard"];
    $jumlahbeli = 2;

    $total = $barangbeli * $jumlahbeli;
    
    echo "Nama saya : " . $nama . "<br>" . "Umur saya : " . $umur . "<br>";
    echo "Harga total : " . $total;

    ?>
</body>
</html>