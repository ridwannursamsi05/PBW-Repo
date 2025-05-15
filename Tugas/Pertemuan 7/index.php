<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian Barang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 30px;
        }

        .kotak-hasil {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 25px;
            width: 420px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        h2 {
            margin-top: 0;
        }

        hr {
            margin: 10px 0 20px;
        }

        .label {
            font-weight: bold;
        }

        .total-bayar {
            font-weight: bold;
            font-size: 1.1em;
        }
    </style>
</head>

<body>
    <!-- Proses Hitung -->
    <?php
    // Pajak Setiap Beli
    define("PAJAK", 0.10);

    // List Barang
    $daftarBarang = [
        "Keyboard" => 150000,
        "Mouse"    => 50000,
        "Monitor"  => 2000000
    ];

    // Variable barang dan jumlahnya
    $namaBarang = "Monitor";
    $jumlahBeli = 10;
    $hargaSatuan = $daftarBarang[$namaBarang];
    $totalSebelumPajak = $hargaSatuan * $jumlahBeli;

    // Pajak
    $pajak = $totalSebelumPajak * PAJAK;

    // Total
    $totalAkhir = $totalSebelumPajak + $pajak;
    ?>

    <!-- Tampilan Hasil -->
    <div class="kotak-hasil">
        <h2>Perhitungan Total Pembelian</h2>
        <hr>
        <p><span class="label">Nama Barang:</span> <?= $namaBarang; ?></p>
        <p><span class="label">Harga Satuan:</span> Rp <?= number_format($hargaSatuan, 0, ',', '.'); ?></p>
        <p><span class="label">Jumlah Beli:</span> <?= $jumlahBeli; ?></p>
        <p><span class="label">Total Sebelum Pajak:</span> Rp <?= number_format($totalSebelumPajak, 0, ',', '.'); ?></p>
        <p><span class="label">Pajak (10%):</span> Rp <?= number_format($pajak, 0, ',', '.'); ?></p>
        <p class="total-bayar">Total Bayar: Rp <?= number_format($totalAkhir, 0, ',', '.'); ?></p>
    </div>
</body>

</html>
