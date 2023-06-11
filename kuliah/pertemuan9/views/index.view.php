    <!-- Untuk Header -->
<?php require('partials/header.php'); ?>

    <!-- Untuk Nav  -->
    <?php require ('partials/nav.php'); ?>

    <div class="container">
        <h1>Halaman Rumah </h1>

    <!-- Untuk Data Mahasiswa -->
        <h3>Daftar Mahasiswa </h3>
        <?php foreach($students as $student) : ?>
            <ul>
                <li>Nama : <?= $student["nama"]; ?></li>
                <li>Npm : <?= $student["npm"]; ?></li>
                <li>Email : <?= $student["email"]; ?></li>
            </ul>
            <?php endforeach; ?>
    </div>

    <!-- Untuk Footer -->
<?php require ('partials/footer.php'); ?>