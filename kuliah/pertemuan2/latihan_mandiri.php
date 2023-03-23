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
</body>
</html>