<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';
$id = $_GET["id"];

$admin = query("SELECT * FROM admin WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah_admin($_POST) > 0) {
        echo"<script>
        alert('admin berhasil diubah');
        document.location.href = 'index_admin.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
} ?>

<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>

<div class="content" id="container">
    <h1>Tambah Admin</h1>

    <form action="" method="post" enctype="multipart/form-data" class="box-input">
        <input type="hidden" name="id" value="<?= $admin['id']?>">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $admin['username']?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $admin['email']?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?= $admin['password']?>">
        </div>
        <div class="button">
            <button type="submit" name="ubah" class="btn btn-primary">Ubah admin</button>
        </div>
        </form> 
</div>

<?php require('partials/footer.php') ?>