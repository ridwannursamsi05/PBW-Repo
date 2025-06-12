<?php include 'proses_daftar_pelanggan.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Pelanggan</title>
</head>
<body>
    <?php
    include 'nav.php'; ?>
    <div class="container mt-4">
        <h2>Daftar Pelanggan</h2>

        <!-- Tabel Daftar Pelanggan -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo htmlspecialchars($row['Nama']) ?></td>
                    <td><?php echo htmlspecialchars($row['Alamat']) ?></td>
                    <td><?php echo htmlspecialchars($row['Email']) ?></td>
                    <td><?php echo htmlspecialchars($row['Telepon']) ?></td>
                    <td>
                        <!-- Tombol Edit dan Hapus (belum ada prosesnya) -->
                        <a href="form_edit_pelanggan.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="proses_hapus_pelanggan.php?id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
