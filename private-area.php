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
    <div class="form">
        <h2 class="form-title">
            Ciao 
        <?php echo $_SESSION['nome'] ;
            ?> ecco i tuoi eventi
        </h2>
        <?php
            foreach ($_SESSION['result_event'] as $value) {?>
            <div class="card-event">
            <?php echo $value['nome_evento']; ?> 
            <?php echo $value['data_evento']; ?> 
            </div>
                
        <?php }?>
    </div>

</body>
</html>