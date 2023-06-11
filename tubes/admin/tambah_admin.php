<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';
if (isset($_POST["tambah"])) {
    if (registrasi($_POST) > 0) {
        echo"<script>
        alert('admin baru berhasil di tambahkan');
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
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password2" name="password2">
        </div>
        <div class="button">
            <button type="submit" name="tambah" class="btn btn-primary">Tambah admin</button>
        </div>
        </form> 
</div>

<?php require('partials/footer.php') ?>