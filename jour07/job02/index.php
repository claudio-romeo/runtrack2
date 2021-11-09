<?php
setcookie('nbvisites','0');


setcookie( 'nbvisites');


var_dump($_COOKIE);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

<?php
if (isset($_COOKIE['nbvisites'])) 

{
    $_COOKIE['nbvisites']++;
    echo "Le nombre de visite s'élève à"  .$_COOKIE['nbvisites'];
    
    else
 {
    $_COOKIE['nbvisites'] = 0;
}


}


?>
<input type="submit" name="reset" value="reset">
    </form>
</body>
</html>