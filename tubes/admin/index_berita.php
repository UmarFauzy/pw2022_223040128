<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}
require '../functions.php';

$product = query("SELECT * FROM product");

if(isset($_POST["cari"])){
    $product = cari_berita($_POST["keyword"]);
}

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';

$orderBy = isset($_GET['ordeyBy']) ? $_GET['orderBy'] : 'judul_berita';

$product = query("SELECT * FROM product ORDER BY $orderBy $sort");

function flipSort($sort){
    return $sort == 'asc' ? 'desc' : 'asc';
}
?>


<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="content">
    <h1>Berita PasFashion</h1>

    <form action="" method="post">
        <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian.." autocomplete="off" id="keyword_berita">
        <button type="submit" name="cari" id="cari" class="btn btn-primary ms-2 px-5">Cari</button>
        <a href="tambah_berita.php" class="btn btn-danger ms-2 px-5">Tambah Data</a>
        <a href="../pdf/cetak_berita.php" target="_blank" class="btn btn-primary ms-2 px-5">Cetak</a>
    </form>
    <div id="container">
        <table class="tb">
            <thead>
                <tr>
                    <th>ID berita</th>
                    <th class="aksi">action</th>
                    <th><a href="?orderBy=judul_berita&sort=<?= $orderBy == 'judul_berita' ? flipSort($sort) : 'asc' ?>">
                    Judul Berita
                    <?php if($orderBy == 'judul_berita') : ?>
                        <?php if ($sort == 'asc') : ?>
                            <i class="fa fa-sort-asc"></i>
                            <?php else : ?>
                            <i class="fa fa-sort-desc"></i>
                        <?php endif; ?>
                    <?php endif; ?>
                    </a></th>
                    <th>Foto Berita</th>
                    <th>ID kategori</th>
                    <th>Category</th>
                    </tr>
            </thead>
            <tbody>
      <?php foreach ($product as $p) : ?>
        <tr>
          <td><?= $p['id_product']; ?></td>
          <td>
              <a href="ubah_berita.php?id_product=<?= $p['id_product'] ?>" class="badge text-bg-warning">ubah</a> |
              <a href="hapus_berita.php?id_product=<?= $p['id_product'] ?>" class="badge text-bg-danger">hapus</a>
            </td>
            <td><?= $p['judul_berita']; ?></td>
            <td><img src="../img/<?= $p['gambar']; ?>" width="200px"></td>
            <td>
                      <?php
                       $category = mysqli_query($conn, "SELECT * FROM kategori");
                       while ($c = mysqli_fetch_array($category)) {
                          if ($c['id_kategori'] == $p['id_kategori']) {?>
                       <?= $c['id_kategori']; ?>
                       <?php }
                       } ?>
                   </td>
            <td>
                    <?php
                     $category = mysqli_query($conn, "SELECT * FROM kategori");
                     while ($c = mysqli_fetch_array($category)) {
                        if ($c['id_kategori'] == $p['id_kategori']) {?>
                     <?= $c['nama_kategori']; ?>
                     <?php }
                     } ?>
                 </td>
          <td>
        </tr>
      <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php require('partials/footer.php') ?>



