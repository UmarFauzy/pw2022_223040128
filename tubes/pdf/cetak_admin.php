<?php

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php';

$admin = query("SELECT * FROM admin");

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
<h1>ADMIN</h1>
<table class="tb">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>';
foreach($admin as $a){

    $html .= '
                    <tr>
                    <td>'. $a["id"] .'</td>
                    <td>'. $a["username"] .'</td>
                    <td>'. $a["email"] .'</td>
                    <td>'. $a["password"] .'</td>
                    </tr>

';

}



$html .= '</tbody>
</table>
</body>
</html>';







$mpdf->WriteHTML($html);
$mpdf->Output();