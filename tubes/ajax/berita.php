<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM product
INNER JOIN kategori
ON product.id_kategori = kategori.id_kategori
WHERE
id_product LIKE '%$keyword%' OR
product.id_kategori LIKE '%$keyword%' OR
judul_berita LIKE '%$keyword%' OR
gambar LIKE '%$keyword%'";

$product = query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>

  <!-- Untuk Css -->
  <link rel="stylesheet" href="../css/admin.css">
  <script src="../js/jquery-3.7.0.min.js"></script>
  <script src="../js/script.js"></script>
  
  <!--FontStyle-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
  
  <!--Untuk Icons-->
  <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>

  <!-- Untuk Boostrap -->  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<div id="container">
        <table class="tb">
            <thead>
                <tr>
                    <th>ID berita</th>
                    <th class="aksi">action</th>
                    <th>Judul Berita</th>
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


</body>
</html>