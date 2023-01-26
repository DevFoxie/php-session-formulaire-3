<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CUSTOM CSS -->
    <link rel="stylesheet" href="./css/custom.css">
    <!--FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

    <title>Page 1</title>
</head>

<body>

    <h1>Les cookies PHP</h1>

    <?php
    // Exercice 1 :
    echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    echo "Adresse IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
    echo "Nom du serveur: " . $_SERVER['SERVER_NAME'];
    ?>

    <br>

    <a href="index2.php?lastname=Merniz&firstname=Hakim&age=26">vers la 2ème page</a>

    <!-- Exercice 3 :  -->
    <?php
    if (isset($_POST['login'])) // Si le formulaire a été envoyé...
    {
        setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, null, null, false, true); // On créé le cookie, c'est IMPORTANT !
        header("Location: index.php"); // Et on actualise la page pour que ce script marche à 100% !!!
    } else if (isset($_POST['password'])) {
        setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
        header("Location: index.php");
    }
    ?>

    <div class="form-style-8">
        <h2>Connectez vous à votre compte !</h2>
        <form action="index3.php" method="post">
            <input type="login" name="login" placeholder="Identifiant" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <input type="submit" value="Valider" />
        </form>
    </div>

    <script src="./js/custom.js"></script>
</body>

</html>