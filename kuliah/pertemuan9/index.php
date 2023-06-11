    <?php 
    require('functions.php');
    $title = "Home";
    $students = [
        [
            "nama" => "Muhamad Umar",
            "npm" => "223040128",
            "email" => "umarfauzy91@gmail.com"
        ],

        [
            "nama" => "Zacky",
            "npm" => "223040127",
            "email" => "Zacky@gmail.com"
        ],

        [
            "nama" => "Bagus",
            "npm" => "223040118",
            "email" => "Bagus@gmail.com"
        ],
    ];

// echo $_SERVER["REQUEST_URI"];
// /pw2023_223040128/kuliah/pertemuan9/index.ph

require('views/index.view.php');
?>


