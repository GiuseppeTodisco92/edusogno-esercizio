<?php

require_once('config.php');

// $nome = $connessione->real_escape_string($_POST['nome']);
// $cognome = $connessione->real_escape_string($_POST['cognome']);
$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $sql_select = "SELECT * FROM utenti WHERE email = '$email' ";
    if($result = $connessione->query($sql_select)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['logged'] = true;
                $_SESSION['id'] = $row['id'];
                $_session['email'] = $row['email'];

                header("location: private-area.php");
            }else{
                echo "la password non è corretta";
            }
        }else{
            echo "non ci sono account cno quell'username";
        }
    } else {
        echo "errore in fase di login";
    }

    $connessione ->close();
}
?>