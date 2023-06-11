<?php require("../functions.php") ;
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}



$id_kategori = $_GET["id_kategori"];

$kategori = query("SELECT * FROM kategori WHERE id_kategori = $id_kategori")[0];


if (isset($_POST["ubah"])) {
    if (ubah_category($_POST) > 0) {
        echo"<script>
        alert('Category berhasil di Ubah');
        document.location.href = 'index_kategori.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
}
        
        
        
        ?>

<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="content" id="container">
    <h1>Tambah Kategori PasFashion</h1>
    
    <form action="" method="post" class="box-input">
        <input type="hidden" name="id_kategori" value="<?= $kategori["id_kategori"] ?>">
    <div class="mb-3">
            <label for="nama_kategori" class="form-label">Masukan Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $kategori["nama_kategori"] ?>">
        </div>
            <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
        </div>
    </form>
<?php require('partials/footer.php') ?>