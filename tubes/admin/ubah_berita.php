<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';

$id_product = $_GET["id_product"];

$product = query("SELECT * FROM product WHERE id_product = $id_product")[0];

if (isset($_POST["ubah"])) {
    if (ubah_berita($_POST) > 0) {
        echo"<script>
        alert('berita baru berhasil di tambahkan');
        document.location.href = 'index_berita.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
} ?>
<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>

<div class="content" id="container">
    <h1>Ubah Berita PasFashion</h1>
    
    <form action="" method="post" enctype="multipart/form-data" class="box-input">
        <input type="hidden" name="id_product" value="<?= $product['id_product'] ?>">
        <input type="hidden" name="gambar_lama" value="<?= $product['gambar'] ?>">
        <div class="mb-3">
            <label for="gambar" class="form-label">Masukan Foto</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Masukan Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="<?= $product['judul_berita'] ?>">
        </div>
        <div class="mb-3">
        <select class="form-control" name="id_kategori">
            <option value="">Pilih category</option>
                <?php 
                    $category = mysqli_query($conn, "SELECT * FROM kategori");
                    while ($c = mysqli_fetch_array($category)) :
                        if ($c['id_kategori'] == $product['id_kategori']) {
                        ?>
                    <option value="<?= $c['id_kategori']?>" selected> <?= $c['nama_kategori'];  ?> </option>
                            <?php }else{ ?>
                <option value="<?= $c['id_kategori']?>"> <?= $c['nama_kategori'];  ?> </option>
                <?php } ?>
                <?php endwhile; ?>
        </select>
        </div>
        <div class="button">
            <button type="submit" name="ubah" class="btn-primary">Ubah</button>
        </div>
<?php require('partials/footer.php') ?>