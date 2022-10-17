<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <header>
        <img class="logo" src="assets/img/logo.png" alt="">
    </header>
    <main>

        <div class="form">
        <h2>Crea il tuo account</h2>
        <form action="register.php" method = "POST">
            
            <label for="nome">Inserisci il nome</label>
            <input type="text" name="nome" id="nome" placeholder="Mario" required>

            <label for="cognome">Inserisci il cognome</label>
            <input type="text" name="cognome" id="cognome" placeholder="Rossi" required>

            <label for="email">Inserisci la email</label>
            <input type="text" name="email" id="email" placeholder="name@example.com" required>

            <label for="password">Inserisci la password</label>
            <input type="password" name="password" id="password" placeholder="Scrivila qui" required>

            <input type="submit" value = "registrati">
        </form>
        <a href="">hai già un account? <strong>Accedi</strong></a>
        </div>
       
    </main>
</body>

</html>