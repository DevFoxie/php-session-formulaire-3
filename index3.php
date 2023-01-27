<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CUSTOM CSS -->
    <link rel="stylesheet" href="./css/custom.css">
    <title>Page 3</title>
</head>
<body>

<h1>Bienvenue sur la 3ème page !</h1>

<?php
// Exercice 4 : 
/*
echo "Voici votre identifiant : ". $_COOKIE["login"]."<br> Et voici votre mot de passe : ".$_COOKIE["password"];
*/
if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    echo "Voici votre identifiant : ".$_COOKIE['login'];
    echo "<br>";
    echo "Voici votre mot de passe : ".$_COOKIE['password'];
} else {
    echo "L'identifiant et le mot de passe n'ont pas été enregistrés";
}
?>
    
</body>
</html>