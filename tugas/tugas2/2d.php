<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    *{
        margin :0;
        padding:0;
        line-height:0;
    }

    .container{
                width: 90%;
            }

		.kotak{
			width: 100px;
			height: 100px; 
			background-color: black;
			text-align: center;
			line-height: 100px;
			display: inline-block;
			margin-right:-5px;
			border :1px solid black;
		}

        .kotak1{
			width: 100px;
			height: 100px; 
			background-color: white;
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
    for ($i = 1 ; $i <= 5 ; $i++ ) : ?>
    <?php if ($i % 2 == 0) : ?>
    <div class="kotak1"></div>
    <?php else : ?>
    <div class="kotak"></div>
    <?php endif ; ?>
    <?php endfor ; ?>
<br>
<?php  
    for ($i = 1 ; $i <= 5 ; $i++ ) : ?>
    <?php if ($i % 2 == 0) : ?>
    <div class="kotak"></div>
    <?php else : ?>
    <div class="kotak1"></div>
    <?php endif ; ?>
    <?php endfor ; ?>
<br>
<?php  
    for ($i = 1 ; $i <= 5 ; $i++ ) : ?>
    <?php if ($i % 2 == 0) : ?>
    <div class="kotak1"></div>
    <?php else : ?>
    <div class="kotak"></div>
    <?php endif ; ?>
    <?php endfor ; ?>
<br>
<?php  
    for ($i = 1 ; $i <= 5 ; $i++ ) : ?>
    <?php if ($i % 2 == 0) : ?>
    <div class="kotak"></div>
    <?php else : ?>
    <div class="kotak1"></div>
    <?php endif ; ?>
    <?php endfor ; ?>
    <br>
<?php  
    for ($i = 1 ; $i <= 5 ; $i++ ) : ?>
    <?php if ($i % 2 == 0) : ?>
    <div class="kotak1"></div>
    <?php else : ?>
    <div class="kotak"></div>
    <?php endif ; ?>
    <?php endfor ; ?>

</body>
</html>