<?php
    include 'koneksi_db.php'; // Koneksi database

    // Query untuk menampilkan daftar pelanggan dengan filter pencarian
    $query = "SELECT * FROM pelanggan WHERE 1=1";
    if (!empty($search_nama)) {
        $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
    }

    $result = $conn->query($query);
?>
