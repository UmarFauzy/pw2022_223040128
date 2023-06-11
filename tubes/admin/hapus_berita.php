
<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';

$id_product = $_GET['id_product'];

if(hapus_berita($id_product) > 0){
    echo"<script>
    alert('berita berhasil di hapus');
    document.location.href = 'index_berita.php';
    </script>";
}else {
    echo mysqli_error($id_product);
}




?>