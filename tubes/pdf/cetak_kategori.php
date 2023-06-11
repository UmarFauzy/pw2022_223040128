<?php

require_once __DIR__ . '/../vendor/autoload.php';

require('../functions.php') ;

$kategoris = query("SELECT * FROM kategori");

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
<h1>Categori Fashion</h1>
<table class="tb">
                <thead>
                    <tr>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    </tr>
                </thead>
                <tbody>';
foreach($kategoris as $kategori){

    $html .= '
                    <tr>
                    <td>'. $kategori["id_kategori"] .'</td>
                    <td>'. $kategori["nama_kategori"] .'</td>
                    </tr>

';

}



$html .= '</tbody>
</table>
</body>
</html>';







$mpdf->WriteHTML($html);
$mpdf->Output();