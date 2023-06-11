<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';

if (isset($_POST["tambah"])) {
    if (tambah_berita($_POST) > 0) {
        echo"<script>
        alert('berita baru berhasil di tambahkan');
        document.location.href = 'index_berita.php';
        </script>";
    }else {
        echo"<script>
        alert('berita gagal di tambahkan');
        document.location.href = 'tambah_berita.php';
        </script>";
    }
} ?>
<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>

<div class="content" id="container">
    <h1>Tambah Berita PasFashion</h1>
    
    <form action="" method="post" enctype="multipart/form-data" class="box-input">
        <div class="mb-3">
            <label for="gambar" class="form-label">Masukan Foto</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Masukan Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" name="judul_berita">
        </div>
        <div class="mb-3">
        <select class="form-control" name="id_kategori">
            <option value="">Pilih category</option>
                <?php 
                    $category = mysqli_query($conn, "SELECT * FROM kategori");
                    while ($c = mysqli_fetch_array($category)) :
                ?>
                <option value="<?= $c['id_kategori']?>"> <?= $c['nama_kategori'];  ?> </option>
            <?php endwhile; ?>
        </select>
        </div>
        <div class="button">
            <button type="submit" name="tambah" class="btn-primary">Tambahkan</button>
        </div>
<?php require('partials/footer.php') ?>