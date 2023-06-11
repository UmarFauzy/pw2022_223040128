<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require('../functions.php') ;

$kategoris = query("SELECT * FROM kategori");
if(isset($_POST["cari"])){
  $kategoris = cari_kategori($_POST["keyword"]);
}


$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';

$orderBy = isset($_GET['ordeyBy']) ? $_GET['orderBy'] : 'nama_kategori';

$kategoris = query("SELECT * FROM kategori ORDER BY $orderBy $sort");

function flipSort($sort){
    return $sort == 'asc' ? 'desc' : 'asc';
}


?>

<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="content">
    <h1>Kategori PasFashion</h1>

    <form action="" method="post">
        <input type="text" name="keyword" size="50" autofocus placeholder="masukan pencarian.." autocomplete="off" id="keyword_kategori">
        <button type="submit" name="cari" id="cari" class="btn btn-primary ms-2 px-5">Cari</button>
        <a href="tambah_kategori.php" class="btn btn-danger ms-2 px-5">Tambah Data</a>
        <a href="../pdf/cetak_kategori.php" target="_blank" class="btn btn-primary ms-2 px-5">Cetak</a>
    </form>
    <div id="container">
        <table class="tb">
            <thead>
                <tr>
                  <th>nID</th>
                    <th><a href="?orderBy=nama_kategori&sort=<?= $orderBy == 'nama_kategori' ? flipSort($sort) : 'asc' ?>">
                    Category
                    <?php if($orderBy == 'nama_kategori') : ?>
                        <?php if ($sort == 'asc') : ?>
                            <i class="fa fa-sort-asc"></i>
                            <?php else : ?>
                            <i class="fa fa-sort-desc"></i>
                        <?php endif; ?>
                    <?php endif; ?>
                    </a></th>
                    <th>Action</th>
                    </tr>
            </thead>
            <tbody>
            
      <?php foreach ($kategoris as $kategori) : ?>
        <tr>
          <th scope="row"><?= $kategori['id_kategori']; ?></th>
          <td><?= $kategori['nama_kategori']; ?></td>
          <td>
            <a href="ubah_category.php?id_kategori=<?= $kategori['id_kategori'] ?>" class="badge text-bg-warning">ubah</a> |
            <a href="hapus_category.php?id_kategori=<?= $kategori['id_kategori'] ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php require('partials/footer.php') ?>