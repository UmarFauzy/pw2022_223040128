<?php 
session_start();
require '../functions.php';

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}


 if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

	// Cek username
	if (mysqli_num_rows($result) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
				// set session
				$_SESSION["login"] = true;

				header("Location: index_berita.php");
				exit;
			
		}
	}
    $error = true;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasFashion Login </title>

    <!-- Css -->
    <link rel="stylesheet" href="../css/login.css">

    <!--FontStyle-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login">

            <h1>Login</h1>
            <hr>
            <p>Pas<span>Fashion</span></p>
            <?php if(isset($error)) :?>
            <p style="color : red; font-style : italic;"> Username / Password salah</p>
        <?php endif; ?>
            <form action="" method="POST">
                <label for="text">Username</label>
                <input type="text" placeholder="Username" name="username">
                <label for="Password">Password</label>
                <input type="password" placeholder="password" name="password">
                <button type="submit" name="login">Login</button>
            </form>
        </div>
        <div class="right">
            <img src="../img/login.jpg" alt="">
        </div>
    </div>
</body>
</html>