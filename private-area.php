<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Area Privata</title>
</head>
<body>
    <header>
        <img class="logo" src="assets/img/logo.png" alt="">
    </header>
    <h1>
       <?php echo "ciao" . $_SESSION["email"];
        ?>
    </h1>

    
</body>
</html>