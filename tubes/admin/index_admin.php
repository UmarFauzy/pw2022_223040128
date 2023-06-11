<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}
require '../functions.php';

$admin = query("SELECT * FROM admin");

if(isset($_POST["cari"])){
    $admin = cari_admin($_POST["keyword"]);
}

?>

<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>

    <div class="conten-admin">
        <h1>Pas<span>Fashion</span></h1>

        <form action="" method="post">
        <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="cari" class="btn btn-primary ms-2 px-5">Cari</button>
        <a href="tambah_admin.php" class="btn btn-danger ms-4 px-5">Tambah Admin</a>
        <a href="../pdf/cetak_admin.php" target="_blank" class="btn btn-primary ms-2 px-5">Cetak</a>
        </form>
        <div id="container">
            <table class="tb">
                <thead>
                    <tr>
                        <th class="aksi">Action</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($admin as $a) : ?>
                    <tr>
                        <td>
                        <a href="ubah_admin.php?id=<?= $a['id'] ?>" class="badge text-bg-warning">ubah</a> |
                        <a href="hapus_admin.php?id=<?= $a['id'] ?>" class="badge text-bg-danger">hapus</a>
                        </td>
                        <td><?= $a["id"]; ?></td>
                        <td><?= $a["username"]; ?></td>
                        <td><?= $a["email"]; ?></td>
                        <td><?= $a["password"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>






<?php require('partials/footer.php') ?>