<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                <h4 class="mb-0"><strong>Data Kendaraan</strong></h4>
            </div>
             
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th width="10%">No</th>
                            <th>Nama Kendaraan</th>
                            <th>Tipe</th>
                            <th>Harga / Hari</th>
                        </tr>
                    </thead>
                    <tbody> <?php include "../koneksi.php";
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM kendaraan");
                            while ($d = mysqli_fetch_array($data)) { ?> <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $d['kendaraan_nama']; ?></td>
                                <td><?= $d['kendaraan_tipe']; ?></td>
                                <td>Rp <?= number_format($d['kendaraan_harga_perhari'], 0, ',', '.'); ?></td>
                            </tr> <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>