<?php 

$binatang = ['🐻 ', '🦖 ', '🐉 ', '🐵 ','🐗 '];
$makanan = ['🍕 ','🍔 ','🍟 ','🌭 ','🍗 '];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>

<!-- Lopping yang benar tapi tidak di sarankan karna harus mengisi secara manual-->
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0 ; $i < count($binatang) ; $i++) { ?>
        <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>


    <h2>Daftar Makanan</h2>
    <ul>
        <?php for ($i = 0 ; $i < count($makanan) ; $i++) { ?>
        <li><?= $makanan[$i]; ?></li>
        <?php } ?>
    </ul>
<hr>

<!-- foreach ini loopiing khusus array  -->
    <h2>Daftar Binatang</h2>  
    <ol>
        <?php foreach ($binatang as $B ) { ?>
        <li><?= $B; ?></li>
        <?php } ?>
    </ol>  
    
    <h2>Daftar Makanan</h2>  
    <ol>
        <?php foreach ($makanan as $M ) { ?>
        <li><?= $M; ?></li>
        <?php } ?>
    </ol>
    
    
    <h2>Daftar Makanan</h2>  
    <ol>
        <?php foreach ($makanan as $key => $value ) { ?>
        <li>Index : <?= $key; ?> Value : <?= $value; ?></li>
        <?php } ?>
    </ol>  
</body>
</html>