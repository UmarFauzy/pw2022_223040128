<?php 

// Array Assosiative
// Array yang indexnya adalah stringnya kita buat sendiri 
$mahasiswa = [
    ['Nama' => 'Zacky',
     'Makanan' => ['🍕'], 
     'Binatang' => '🐻'],

    ['Nama' => 'Bagus',
    'Makanan' => ['🍔'],
    'Binatang' => '🦖'],

    ['Nama' => 'Bayu',
    'Makanan' => ['🍟'], 
    'Binatang' => '🐉'],

    ['Nama' => 'Iki',
    'Makanan' => [],
    'Binatang' => '🐵'],

    ['Nama' => 'Umar ',
    'Makanan' => ['🍗' , '🍟' , '🍔' , '🍗' , '🌭'],
    'Binatang' => '🐗 ']
     
];  


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 3</title>
</head>
<body>
    <h2> Daftar Mahasiswa </h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama mahasiswa : <?= $mhs['Nama']; ?></li>
        <li> Makanan Favorit :
            <?php foreach ($mhs ['Makanan'] as $M ) {
                echo $M ;
            } ?>
        </li>
        <li>Peliharaan : <?= $mhs['Binatang']; ?> </li>
    </ul>
    <?php } ?>
</body>
</html>