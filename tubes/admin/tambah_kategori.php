<?php require("../functions.php") ;
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}



if(isset($_POST['tambah'])) {

    //tampilkan pesan jika data berhasil di tambahkan 
       if(tambah($_POST) > 0) {
        echo"<script>
        alert('data berhasil ditambahkan!!');
            document.location.href = 'index_kategori.php' ;
                </script>";
            }
        }
        
        
        
        ?>

<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<div class="content" id="container">
    <h1>Tambah Kategori PasFashion</h1>
    
    <form action="" method="post" class="box-input">
    <div class="mb-3">
            <label for="nama_kategori" class="form-label">Masukan Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
        </div>
            <button type="submit" name="tambah" class="btn-primary">Tambahkan</button>
        </div>
    </form>
<?php require('partials/footer.php') ?>