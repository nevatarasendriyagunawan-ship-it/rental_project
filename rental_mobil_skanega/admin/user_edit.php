 <?php include "header.php"; 
 
 
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>


     <?php
        include "../koneksi.php";
        $id = $_GET['id'];

        $data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$id'");
        $d = mysqli_fetch_assoc($data);
        ?>

     <div class="container mt-4">

         <div class="card shadow-sm">
             <div class="card-header bg-primary text-white">
                 <h4 class="mb-0">Edit User</h4>
             </div>

             <div class="card-body">

                 <form action="user_edit_aksi.php" method="post">
                     <input type="hidden" name="id" value="<?= $d['user_id']; ?>">

                     <div class="mb-3">
                         <label>Username</label>
                         <input type="text" name="username" class="form-control"
                             value="<?= $d['username']; ?>" required>
                     </div>

                     <div class="mb-3">
                         <label>Password (Isi jika ingin ubah)</label>
                         <input type="password" name="password" class="form-control">
                     </div>

                     <div class="mb-3">
                         <label>Nama</label>
                         <input type="text" name="nama" class="form-control"
                             value="<?= $d['user_nama']; ?>" required>
                     </div>

                     <div class="mb-3">
                         <label>Alamat</label>
                         <input type="text" name="alamat" class="form-control"
                             value="<?= $d['user_alamat']; ?>" required>
                     </div>

                     <div class="mb-3">
                         <label>Status</label>
                         <select name="user_status" class="form-control">
                             <option value="1" <?= $d['user_status'] == "admin" ? "selected" : ""; ?>>Admin</option>
                             <option value="2" <?= $d['user_status'] == "user" ? "selected" : ""; ?>>User</option>
                         </select>
                     </div>

                     <button class="btn btn-primary text-white">Update</button>
                     <a href="user.php" class="btn btn-secondary">Kembali</a>

                 </form>

             </div>
         </div>
     </div>


 </body>

 </html>