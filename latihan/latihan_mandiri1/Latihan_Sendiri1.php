<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    $age = 19 ;

    ?>
    <?php 
    if ($age < 30 ){
        echo '$age lebih kecil dari 30';
    }

    elseif ($age >= 30){
        echo '$age lebih besar atau sama dengan 30 ';
    }

    else {
        echo '$age lebih kecill dari 30';
    }    
    ?>
<hr>

    <?php 
    $x = 1071 ;
    ?>
    
    <?php 
    if($x * 3 && $x * 7){
        echo '$x adalah kelipatan 3 dan kelipatan 7';
    }

    elseif ($x * 3 || $x % 7){
        echo '$x adalah kelipatan 3 tetapi keliparan 7';
    }

    elseif ($x % 3 || $x * 7) {
        echo '$x adalah kelipatan 3 tetapi $x mod 7';
    }
    ?>
<hr>

    <?php 
    $y = 40 ;
    ?>

    <?php 
    if ($y == 8 && $y == 10){
        echo '$y kelipatan 8 dan $y kelipatan 10';
    }

    elseif ($y * 4 && $y * 10){
        echo '$y adalah mod 10 dan juga $y adalah mod 4';
    }

    elseif ($y % 4 || $y % 10){
        echo '$y adalah mod 4 atau $y adalah mod 10';
    }

    else {
        echo '$y bukan merupakan keduanya';
    }
    
    ?>
<hr>

    <?php 
    $nim = array ( 'mat' =>200, 'pkn' => 90, 'ips' => 20) ;

    $rimender = $nim['pkn'] % 3;
    switch ($rimender){
        case 0 : 
            echo 'Sangat beruntung';
             break;
        
        case 1 : 
            echo 'beruntung';
            break;

        case 2 : 
            echo 'sedikit beruntung';
            break;

        default :
            echo 'tidak beruntung';
            break;
    }
    ?>
<hr>

        <?php  
        $name = array ('andika ', 'umar ', 'mika ', 'akbar ');
        $name [] = 'nachika';

        echo $name[1];
        echo $name[4];
        ?>
<hr>

    <?php 
    $Nilai = array ( 'mat' => 75, 'ipa' => 65, 'pkn' =>50);

    $Nilai['mat'] *= 20;
    echo $Nilai['mat'];
    ?>
<hr>

    <?php 
    for ($i = 1 ; $i <= 20 ; $i++ ){
    echo $i;
    // echo '<br>';
    }
    ?>
<hr>

  <?php

    $scores = array('Matematika' => 70, 'Bahasa' => 90, 'Sains' => 80);

    // Tulis loop foreach dibawah
    foreach ($scores as $key => $value) {
      echo $key. ':' .$value. '' ;
    }
    
  ?>

<hr>

<?php  
    for ($x = 1 ; $x <= 1000 ; $x++ ) {
        if($x > 50 ){
            break;
        }
        echo $x ;
        // echo '<br>';
    }
?>

<hr>
    <?php 

    for ($i = 1 ; $i <= 10 ; $i++){
        if($i % 3 == 0){
            continue;
        }
        echo $i;
        // echo '<br>';
        }
        
    ?>
<hr>

    <?php 
    $scores = array ('mat' => 10, 'ipa' => 20, 'ips' => 30);
    foreach ($scores as $key => $value){
        echo $key. ':' .$value. '' ;
    }
    ?>

<hr>

    <?php 
 
    // echo rand (100,200,300,400);
    
    ?>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color:blue;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="20" cellspacing="0">
    <tr>
        <td>1</td>
    </tr>
</table>
<table border="1" cellpadding="20" cellspacing="0">
<tr>
    <td>2</td>
    <td>2</td>
</tr>
</table>
<table border="1" cellpadding="20" cellspacing="0">
<tr>
    <td>3</td>
    <td>3</td>
    <td>3</td>
</tr>
<table>
</body>
</html>
<hr>


<?php 

$i = 2 ;

// Ketik loop while dibawah
while($i <= 100){
  if($i % 2 == 0){
  echo $i;
  echo '<br>';
}
$i++;
}

?>
<hr>

<?php 
    $i = 'hello world!'

    while ($i <= 5 ){
        echo $i;
        echo '<br>'
    }
?>

</body>
</html>