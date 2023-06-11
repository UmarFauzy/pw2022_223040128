<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';

$id_kategori = $_GET['id_kategori'];

if(hapus_category($id_kategori) > 0){
    echo"<script>
    alert('Kategori berhasil di hapus');
    document.location.href = 'index_kategori.php';
    </script>";
}else {
    echo mysqli_error($id_kategori);
}




?>