<?php include "header.php"; ?>


<div class="container mt-4">
    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah User</h4>
        </div>

        <div class="card-body">
            <form action="user_aksi.php" method="post">

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="user_status" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="user.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>

    </div>
</div>
