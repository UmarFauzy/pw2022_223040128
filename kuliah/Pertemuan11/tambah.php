<?php
require('functions.php');

$title = 'Form Tambah Data';

// Insert data jika tombol di klik
//Sesuaikan Dengan name di tambah.view.php
if(isset($_POST['tambah'])) {

//tampilkan pesan jika data berhasil di tambahkan 
   if(tambah($_POST) > 0) {
    echo"<script>
            allert ('data berhasil ditambahkan!!');
            document.location.href = 'index.php' ;
        </script>";
   }
}
require('views/tambah.view.php');
