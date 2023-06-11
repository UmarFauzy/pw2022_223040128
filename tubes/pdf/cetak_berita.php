<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php';

$product = query("SELECT * FROM product");

$mpdf = new \Mpdf\Mpdf();

$html .= '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="../css/admin.css">
  <script src="../js/jquery-3.7.0.min.js"></script>
  <script src="../js/script.js"></script>
</head>
<body>
<h1>Berita Fashion</h1>
<table class="tb">
                <thead>
                    <tr>
                    <th>ID berita</th>
                    <th>Judul Berita</th>
                    <th>Foto Berita</th>
                    <th>ID kategori</th>
                    <th>Category</th>
                    </tr>
                </thead>
                <tbody>';
foreach($product as $p){

    $html .= '
                    <tr>
                    <td>'. $p["id product"] .'</td>
                    <td>'. $p["judul_berita"] .'</td>
                    <td><img src="../img/'. $p["gambar"] .'" width="200px"></td>';
                       $category = mysqli_query($conn, "SELECT * FROM kategori");
                       while ($c = mysqli_fetch_array($category)) {
                          if ($c['id_kategori'] == $p['id_kategori']) {
            $html .= '<td>'.$c['id_kategori'].'</td>';
                        }
                       } 

                       
                     $category = mysqli_query($conn, "SELECT * FROM kategori");
                     while ($c = mysqli_fetch_array($category)) {
                        if ($c['id_kategori'] == $p['id_kategori']) {
             $html .= '<td>'.$c['nama_kategori'].'</td>';
                      }
                     }
            $html .= '</tr>';


}



$html .= '</tbody>
</table>
</body>
</html>';







$mpdf->WriteHTML($html);
$mpdf->Output();