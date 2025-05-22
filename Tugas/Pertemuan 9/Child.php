<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1 Sampai 4</title>
</head>
<body>

    <?php
    // Switch
    echo "kendaraan : ";
    $roda_kendaraan = 2;
    switch ($roda_kendaraan) {
        case 2:
            echo "Motor"."<br>";
            break;
        case 4:
            echo "Mobil"."<br>";
            break;
        case 6:
            echo "Truk Kecil"."<br>";
            break;
        case 10:
            echo "Truk Besar"."<br>";
            break;
        default:
            echo "Tidak Valid"."<br>";
    }
    ?>

    <?php
    // For Genap
    echo "Bilangan Genap : ";
    for ($i = 2; $i <= 10; $i++) {
        if ($i % 2 == 0){
            echo $i . " ";
        }
    }
    echo "<br>";
    ?>

    <?php
    // Array Foreach
    $hewan = ["Kucing", "Anjing", "Ayam", "Bebek", "Kambing"];

    echo "Peliharaanku : ";
    foreach ($hewan as $peliharaan) {
        echo $peliharaan . " ";
    }
    echo "<br>";
    ?>

    <?php
    // Ternary Operator
    $angka = 2;

    $hasil = ($angka % 2 == 0) ? "Ganjil" : "Genap" ;
    echo "Angka $angka merupakan bilangan $hasil";
    ?>

</body>
</html>