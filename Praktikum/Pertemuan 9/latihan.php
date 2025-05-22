<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <?php
    
    // Percabangan
    // $hari = "Senin";

    // switch ($hari) {
    // case "Senin":
    //     echo "Hari pertama kerja!"."<br>";
    //     break;
    // case "jum'at":
    //     echo "Solat jumat!"."<br>";
    //     break;
    // case "Minggu":
    //     echo "Libur akhir pekan!"."<br>";
    //     break;
    // default:
    //     echo "Hari biasa."."<br>";
    // }

    //Looping
    // for ($i = 1; $i <= 5; $i++) {
    // echo "Angka ke-”.$i.”<br>";
    // }

    // $buah = ["Apel", "Jeruk", "Mangga"];
    // for ($i = 0; $i < count($buah); $i++) {
    // echo $buah[$i] . "<br>";
    // }

    // $nilai = 1;

    // while ($nilai <= 5) {
    // echo "Nilai: ". $nilai ."<br>";
    // $nilai++;
    // }

    // $mahasiswa = [
    // "10001" => "Andi",
    // "10002" => "Budi",
    // "10003" => "Citra"
    // ];
    // foreach ($mahasiswa as $nim => $nama) {
    // echo "NIM: ". $nim .", Nama:". $nama."<br>";
    // }

    // $umur = 18;
    // $status = ($umur >= 17) ? "Dewasa" : "Anak-anak";
    // echo $status;

    // // Include Warning dan Fatal
    // include 'nama_file.php';
    // require 'nama_file.php';

    ?>

    
    <?php
    echo '<a href="index.php">Beranda</a> | <a href="about.php">Tentang</a> | <a href="contact.php">Kontak</a>';
    ?>

    <div class="menu">
        <?php 
        // include 'menu.php';
        ?>
    </div>

</body>
</html>