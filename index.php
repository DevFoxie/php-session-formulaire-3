<?php
session_start();
setcookie('login', $_POST['login']);
setcookie('password', $_POST['password']);
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
    <br>
    <a href="index4.php">vers la 3ème page</a>

    <div class="form-style-8">
        <h2>Connectez vous à votre compte !</h2>
        <form action="index3.php" method="post">
            <input type="login" maxlength="20" name="login" id="login" placeholder="Identifiant" />
            <input type="password" maxlength="20" name="password" id="password" placeholder="Mot de passe" />
            <input type="submit" value="Valider" />
        </form>
    </div>

    <div class="picture">
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" >
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" >
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" >
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" >
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" >
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" >
    </div>

    <script src="./js/custom.js"></script>
</body>

</html>