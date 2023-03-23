<?php 
$film  = 
[
    [
        'Poster' =>  'umar.jpeg' ,
        'Nama'  =>  ' Muhamad Umar Fauzy Rahman ' ,
        'Nrp'  =>  ' 223040128' , 
        'Email'  =>  'umarfauzy91@gmail.com' ,
        'Jurusan' => 'teknik informatika',
    ],

    [
        'Poster' =>  'ayunda.png' ,
        'Nama'  =>  'Ayunda Risu' ,
        'Nrp'  =>  '2230400001' , 
        'Email'  =>  'ayundarisu@gmail.com' ,
        'Jurusan' => 'Teknik Informatika',
    ],

    [
        'Poster' =>  'moona.png',
        'Nama'  =>  'Moona Hoshinova' ,
        'Nrp'  =>  '2230400002' , 
        'Email'  =>   ' moona@gmail.com '  ,
        'Jurusan' => 'Teknik Informatika',
    ],

    [
        'Poster' =>  'iofi.png ' ,
        'Nama'  =>  ' Airani Iofifteen ' ,
        'Nrp'  =>  '2230400003 ' , 
        'Email'  =>  ' iofi@gmail.com ' ,
        'Jurusan' => 'Teknik Informatika'   ,
    ],

    [
        'Poster' =>  'oliie.png ' ,
        'Nama'  =>  'Kureiji Ollie' ,
        'Nrp'  =>  ' 2230400004 ' ,
        'Email'  =>  ' ollie@gmail.com ' ,
        'Jurusan' => 'Teknik Informatika',
    ],

    [
        'Poster' =>  'anya.png' ,
        'Nama'  =>  'Anya Melfissa' ,
        'Nrp'  =>  '2230400005' , 
        'Email'  =>  ' Anya91@gmail.com ' ,
        'Jurusan' => 'Teknik Informatika',
    ],
     
    [
        'Poster' =>  'reine.png ' ,
        'Nama'  =>  'Pavolia Reine' ,
        'Nrp'  =>  ' 2230400006 ' , 
        'Email'  =>  ' PavoliaReine91@gmail.com ' ,
        'Jurusan' => 'Teknik Informatika',
    ],

    [
        'Poster' =>  'zeta.png ' ,
        'Nama'  =>  'Vestia Zeta' ,
        'Nrp'  =>  '2230400007 ' , 
        'Email'  =>  ' VestiaZeta1@gm ail.com ' ,
        'Jurusan' => 'Teknik Informatika',
    ],

    [
        'Poster' =>  'kaela.png ' ,
        'Nama'  =>  'Kaela Kovalskia ' ,
        'Nrp'  =>  '2230400008' , 
        'Email'  =>  ' KaelaKovalskia1@gmail.com ' ,
        'Jurusan' => 'Teknik Informatika',
    ],

    [
        'Poster' =>  'kobo.jpg' ,
        'Nama'  =>  'Kobo Kanaeru' ,
        'Nrp'  =>  '2230400009' , 
        'Email'  =>   'KoboKanaeru@gmail.com ' ,            
        'Jurusan' => 'Teknik Informatika',                                          
    ],
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
    <style>

        img {
            width: 150px;
            height :200px;
        }
    </style>
</head>
<body>
    <h2>Daftar Film Animasi </h2>
    <?php foreach ($film as $f) { ?>
        <ul>
            <li><img src="img/<?= $f ["Poster"]; ?>"></li>
            <li>Nama : <?= $f ["Nama"]; ?></li>
            <li>Nrp : <?= $f ["Nrp"]; ?></li>
            <li>Email : <?= $f ["Email"]; ?></li>
            <li>Jurusan : <?= $f ["Jurusan"]; ?></li>
        </ul>


    <?php } ?>
</body>
</html>