<?php 

$hardware = ['Motherboard', 'Processor', 'Hard disk', 'PC Collor', 'VGA Card' , 'SSD']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Macam macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($hardware as $h) { ?>
        <li><?= $h; ?></li>
        <?php } ?>
    </ol>
<br>

    <h2>Macam macam perangkat keras komputer baru</h2>
    <?php 
    array_push ($hardware, 'Card Reader', 'Modem');
    asort ($hardware);
    ?>
    <ol>
        <?php foreach ($hardware as $h) { ?>
        <li><?= $h; ?></li>
        <?php } ?>
    </ol>


</body>
</html>