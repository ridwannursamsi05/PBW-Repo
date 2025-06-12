<?php
include 'koneksi_db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $email   = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Siapkan query insert
    $stmt = $conn->prepare("INSERT INTO Pelanggan (Nama, Alamat, Email, Telepon) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $alamat, $email, $telepon);

    // Eksekusi dan tampilkan notifikasi
    if ($stmt->execute()) {
        echo "<script>
            alert('Pelanggan berhasil ditambahkan!');
            window.location.href = 'tambah_pelanggan.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan pelanggan: " . addslashes($stmt->error) . "');
            window.location.href = 'tambah_buku.php';
        </script>";
    }
}
?>