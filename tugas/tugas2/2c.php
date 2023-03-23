<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .container{
			width: 90%;
		}

		.kotak{
			width: 100px;
			height: 100px; 
			background-color: red;
			text-align: center;
			line-height: 100px;
			display: inline-block;
			margin-right:-5px;
			border :1px solid black;
		}
    </style>
</head>
<body>

    <?php  
    for ($i = 1 ; $i <= 10 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 9 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 8 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 7 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 6 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 5 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 4 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 3 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 2 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>
    <?php  
    for ($i = 1 ; $i <= 1 ; $i++ ) : ?>
    <div class="kotak"><?= $i; ?> </div>
    <?php endfor ; ?>
<br>





</body>
</html>