<?php

var_dump($_GET);
//Si on appuie sur le bouton submit
if ($_GET['submit']){
    //Et que le nombre inscrit dans l'input text est pair alors on affichera "nombre pair"
    if ($_GET['nombre']%2 == 0){
        echo "Nombre pair";
    }
    elseif ($_GET['nombre']%2 != 0){
        echo "Nombre impair";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nombre">
        <input type="submit" name="submit">
    </form>
</body>
</html>