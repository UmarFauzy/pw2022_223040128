<?php 

// Tentang Array

// Membuat Array 

$hari = array ('senin ','selasa ','rabu ');
$bulan = ['january ', 'february ', 'maret '];
$bebas = ['Umar ', 19, false];
$binatang = ['🐻 ', '🦖 ', '🐉 ', '🐵 ','🐗'];

// Menampilkan isi Array 
// Mencetak satu element pada array menggunakan index

echo $hari[2];
echo $binatang[3];
echo $bulan [2];
echo $bebas [1];
echo '<br>';

// Mencetak seluruh isi array
// var_dumpm , print_r

var_dump ($binatang);
echo '<br>';

print_r ($hari);
echo '<br>';

var_dump($bebas);
echo '<br>';

print_r($bulan);
echo '<br>';

echo '<hr>';


// Memanipulasi isi araay

// Isi element menggukankan indexnya
$hari [3] ='kamis';
print_r ($hari);


echo '<br>';
// Menambahkan element di akhir array menggunakan idenx kosong []
// Hanya bisa memasukan satu dan sisanya duplikat
$hari [] = "jum'at";
$hari [] = "sabtu";
print_r($hari);


echo '<br>';
// Menambahkan element baru di akhir array menggunakan array_push () 
// Noted tidak perlu di duplikat
array_push($bulan, 'april ','mei ','juni ','juli ','agustus ');
print_r ($bulan);


echo '<hr>';
// Menambahkan element baru di awal array menggunakan array_unshift (menambahkan di depan array)
// Noted tidak perlu di duplikat 
array_unshift ($binatang, '🐨', '👽');
print_r ($binatang);

echo '<br>';
// Menghapus di akhir array menggunakan array_pop 
// noted hanya bisa menhapus satu persatu
array_pop ($hari);
print_r ($hari);


echo '<br>';
// Menghapus di awal array menggunakan array_shift
array_shift ($hari);
print_r ($hari);

echo '<hr>';

?>