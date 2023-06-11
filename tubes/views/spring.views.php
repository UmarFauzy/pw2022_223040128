<?php 
require '../functions.php';
$product = query("SELECT * FROM product"); 
?>
<!-- Untuk HEADER -->
<?php require('partials/header.php'); ?>

    <!-- Naavbar -->
<?php require('partials/navbar.ols.php'); ?>
    <!-- Naavbar -->

    <!-- logo -->
    <!-- <div class="logo">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
    </div> -->
    <!-- logo -->
    
    <!-- Main Conten -->
    <main>
        <div class="container">
            <h2 class="title"><span>Spring</span> Fashin</h2>
            <div class="row">
                <?php foreach ($product as $p) :?>
                    <?php if($p["id_kategori"] == "3" ) : ?>
                <div class="col animate">
                <img src="../img/<?= $p["gambar"] ?>" />
                    <h4><?= $p["judul_berita"] ?></h4>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>



                <!-- <div class="col animate">
                    <img src="img/hd2.jpg" />
                    <h4>Sepatu running</h4>
                    <p>Rp. 100.000</p>
                </div>
                <div class="col">
                    <img src="img/hd3.jpg" />
                    <h4>Celana Sport</h4>
                    <p>Rp. 100.000</p>
                </div>
                <div class="col">
                    <img src="img/hd4.jpg" />
                    <h4>Baju Navy</h4>
                    <p>Rp. 100.000</p>
                </div>
                <div class="col">
                    <img src="img/hd5.jpg" />
                    <h4>Sepatu Full White</h4>
                    <p>Rp. 100.000</p>
                </div>
                <div class="col">
                    <img src="img/hd6.jpg" />
                    <h4>Baju</h4>
                    <p>Rp. 100.000</p>
                </div>
                <div class="col">
                    <img src="img/hd7.jpg" />
                    <h4>Kaos Kaki</h4>
                    <p>Rp. 100.000</p>
                </div>
                <div class="col">
                    <img src="img/hd8.jpg" />
                    <h4>Jam Tangan Sport</h4>
                    <p>Rp. 100.000</p>
                </div> -->
            </div>
        </div>
    </main>
    <!-- Main Conten -->
    
    <!-- Footer -->
    <?php require('partials/footer.ols.php'); ?>
    <!-- Footer -->
