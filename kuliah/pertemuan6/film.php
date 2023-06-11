<?php 
$film  = 
[
    [
        'Poster' =>  'grave.png' ,
        'Judul'  =>  ' GRAVE OF THE FIREFLIES ' ,
        'Tahun'  =>  ' 16 April 1988 ' , 
        'Genre'  =>  ['Perang'] ,
        'Pemeran utama' => 'Setsuko',
        'Sutradara' => ' karya Akiyuki Nosaka.',
    ],

    [
        'Poster' =>  'weathering.png' ,
        'Judul'  =>  'Weathering with You' ,
        'Tahun'  =>  '2016' , 
        'Genre'  =>  ['Romance, ' , 'Fantasi, '] ,
        'Pemeran utama' => 'Hodaka Morishima',
        'Sutradara' => 'Makoto Shinkai',
    ],

    [
        'Poster' =>  '5cm.png' ,
        'Judul'  =>  '5 Centimeters per Second' ,
        'Tahun'  =>  '2007' , 
        'Genre'  =>  ['Romance, ' , 'Fantasi, ' , 'Drama, '] ,
        'Pemeran utama' => 'Takaki',
        'Sutradara' => 'Makoto Shinkai',
    ],

    [
        'Poster' =>  'wind.png' ,
        'Judul'  =>  ' THE WIND RISES ' ,
        'Tahun'  =>  '2013' , 
        'Genre'  =>  ['Biografi, ' , 'Fiksi, ' , 'Sejarah, ' ] ,
        'Pemeran utama' => 'Nahoko Satomi',
        'Sutradara' => 'Hayao Miyazaki',
    ],

    [
        'Poster' =>  'mirai.png' ,
        'Judul'  =>  'MIRAI NO MIRAI' ,
        'Tahun'  =>  '2018' , 
        'Genre'  =>  ['Future,' , 'Sejarah, ' , 'Romance, '] ,
        'Pemeran utama' => ' Oota, Kun',
        'Sutradara' => 'Mamoru Hosoda',
    ],

    [
        'Poster' =>  'suzume.png' ,
        'Judul'  =>  'Suzume' ,
        'Tahun'  =>  '2022' , 
        'Genre'  =>  ['Romance, ' , 'Fantasy, '] ,
        'Pemeran utama' => 'Suzume Iwato',
        'Sutradara' => 'Makoto Shinkai'
    ],
     
    [
        'Poster' =>  'yourname.png' ,
        'Judul'  =>  'Your Name.' ,
        'Tahun'  =>  '2017' , 
        'Genre'  =>  ['Romance, ' , 'Fantasy, '] ,
        'Pemeran utama' => 'Mitsuha Miyamizu',
        'Sutradara' => 'Makoto Shinkai',
    ],

    [
        'Poster' =>  'red.png' ,
        'Judul'  =>  'One Piece Film: Red' ,
        'Tahun'  =>  '2022' , 
        'Genre'  =>  ['	Petualangan, ' , 'fantasi, '] ,
        'Pemeran utama' => 'Luffy',
        'Sutradara' => 'Gorō Taniguchi',
    ],

    [
        'Poster' =>  'sprited.png' ,
        'Judul'  =>  'Spirited Away' ,
        'Tahun'  =>  '2001' , 
        'Genre'  =>  ['Petualangan, ' , 'Misteri, '] ,
        'Pemeran utama' => 'Chihiro',
        'Sutradara' => 'Hayao Miyazaki',
    ],

    [
        'Poster' =>  'sbmd.png' ,
        'Judul'  =>  'Stand by Me Doraemon' ,
        'Tahun'  =>  '2014' , 
        'Genre'  =>  ['Film Anak Anak, ' , 'Fiksi Ilmiah, ' , 'Drama, ' , 'Petualangan, ' ] ,            
        'Pemeran utama' => 'Nobita',                                          
        'Sutradara' => 'Takashi Yamazaki',  
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
            width: 100px;
            height :150px;
        }
    </style>
</head>
<body>
    <h2>Daftar Film Animasi </h2>
    <?php foreach ($film as $f) { ?>
        <ul>
            <li><img src="img/<?= $f ["Poster"]; ?>"></li>
            <li>Nama : <?= $f ["Judul"]; ?></li>
            <li>Tahun : <?= $f ["Tahun"]; ?></li>
            <li>Sutradara : <?= $f ["Sutradara"]; ?></li>
            <li>Pemeran Utama : <?= $f['Pemeran utama']; ?></li>
            <li>Genre : 
                    <?php foreach ($f ['Genre']as $f) {
                        echo $f ;
                    } ?>
        </ul>
    <?php } ?>
</body>
</html>