<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CUSTOM CSS -->
    <link rel="stylesheet" href="./css/custom.css">
    <title>Page 2</title>
</head>
<body>

<h1>Bienvenue sur la 2ème page</h1>

<?php
// Exercice 2
echo "Bonjour ".$_GET["firstname"]." ".$_GET["lastname"].". Vous avez : ".$_GET["age"]." ans !";
?>

</body>
</html>