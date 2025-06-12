<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>

    <!-- koneksi -->
    <?php
    // // Mengimpor file koneksi database agar bisa menggunakan koneksi $conn
    // include 'koneksi_db.php';
    ?>

    <!-- insert -->
    <?php
    // include 'koneksi_db.php';
    // // Mengecek apakah permintaan yang masuk adalah POST (biasanya dari form submission)
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // // Mengambil data yang dikirim melalui form dengan method POST
    // $judul = $_POST['judul'];               // Judul buku
    // $penulis = $_POST['penulis'];           // Nama penulis buku
    // $tahun_terbit = $_POST['tahun_terbit']; // Tahun terbit buku
    // $harga = $_POST['harga'];               // Harga buku
    // $stok = $_POST['stok'];                 // Jumlah stok buku


    // // Menyiapkan query SQL untuk menyisipkan data ke tabel 'Buku' menggunakan prepared statement
    // $stmt = $conn->prepare("INSERT INTO Buku (Judul, Penulis, Tahun_Terbit, Harga, stok) VALUES (?, ?, ?, ?, ?)");
    
    // // Mengikat parameter ke statement SQL dengan format tipe data:
    // // s = string, i = integer. Dalam hal ini: judul & penulis (string), lainnya integer
    // $stmt->bind_param("ssiii", $judul, $penulis, $tahun_terbit, $harga, $stok);
    
    // // Mengeksekusi statement, dan menyimpan pesan keberhasilan atau kesalahan
    // if ($stmt->execute()) {
    //     $message = "Buku berhasil ditambahkan!"; // Jika berhasil insert ke DB
    // } else {
    //     $message = "Error: " . $stmt->error;     // Jika gagal, tampilkan pesan error
    // }
    // }
    ?>

    <!-- Show Data -->
    <?php
    include 'koneksi_db.php';
    // Query SELECT untuk mengambil semua data dari tabel buku
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql); // Menggunakan metode OOP

    // Cek apakah query berhasil dijalankan
    if (!$result) {
        die("Query gagal: " . $conn->error); // Properti error OOP
    }

    // Inisialisasi array untuk menyimpan data
    $data = [];


    // Fetch data baris demi baris ke dalam array asosiatif
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }


    // Menampilkan hasil data menggunakan foreach
    foreach ($data as $row) {
        echo "ID: " . $row['ID'] . "<br>";
        echo "Judul: " . htmlspecialchars($row['Judul']) . "<br>";
        echo "Penulis: " . htmlspecialchars($row['Penulis']) . "<br>";
        echo "Tahun Terbit: " . $row['Tahun_Terbit'] . "<br>";
        echo "Harga: Rp" . number_format($row['Harga'], 2) . "<br><hr>";
    }

    // Tutup koneksi setelah selesai
    $conn->close();
    ?>

    <!-- delete -->
    <?php
    // include 'koneksi_db.php';
    // // Validasi: pastikan parameter 'id' ada dan berupa angka
    // if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    //     $id = $_GET['id'];


    //     // Siapkan prepared statement untuk DELETE
    //     $stmt = $conn->prepare("DELETE FROM buku WHERE id = ?");
    //     $stmt->bind_param("i", $id); // "i" untuk integer


    //     // Eksekusi dan periksa hasilnya
    //     if ($stmt->execute()) {
    //         echo "<script>alert('Data berhasil dihapus.'); 
    //                     window.location.href = 'index.php';</script>";
    //     } else {
    //         echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.history.back();</script>";
    //     }


    //     // Tutup statement dan koneksi
    //     $stmt->close();
    // } else {
    //     echo "<script>alert('ID tidak valid.'); window.history.back();</script>";
    // }
    // $conn->close();
    ?>


</body>
</html>