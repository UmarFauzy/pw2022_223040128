<?php 
define('BASE_URL', '/pw2023_223040128/kuliah/pertemuan9/');

function cekActive($uri) {
    return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '' ;
}
?>