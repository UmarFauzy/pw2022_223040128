<?php 
    $depan = "umar" ;
    $belakang = "fauzy" ;
?>
    <?php for ($i=1 ; $i <= 100 ; $i++) :?>
    <?php if ($i % 3 == 0 && $i % 5 == 0): ?>
    <?= $depan ." ". $belakang; ?>
<br>
    <?php elseif ($i % 5 == 0) : ?>
        <?= $belakang; ?>
<br>
    <?php elseif ($i % 3 == 0): ?>
    <?= $depan; ?>
<br>
    <?php else: ?>
        <?= $i; ?> 
<br>
    <?php endif; ?>
    <?php endfor; ?>