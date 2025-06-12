<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 10</title>
</head>
<body>

    <?php
    $nilai = 90;
    $gend = "laki-laki";

    echo "Nilai: $nilai<br>";
    echo "Gender: $gend<br>";

    if ($nilai >= 80 && $gend == "laki-laki" ) {
    echo "Nilai A";
    } elseif ($nilai >= 70) {
    echo "Nilai B";
    } else {
    echo "Nilai C";
    }    
    ?>
    
</body>
</html>