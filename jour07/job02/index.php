<?php
$cookiefin = time ()+3600*24*365;
setcookie('nbvisites', string $value = "0", $cookiefin );
var_dump($_COOKIE);

if (isset($_COOKIE['nbvisites']))
{
    echo " l'élèment existe bien" . $_COOKIE['nbvisites'];

}
else {
    echo "L'élèment n'éxiste pas !";
}

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
    $_COOKIE["nbvisites"]++;
} 

echo 'Il y a eu avant reset : ' .htmlspecialchars ($_COOKIE['nbvisites']++) . ' visites';

if (isset($_POST['reset'])) 

{
    unset($_COOKIE['nbvisites']);
}
?><input type="submit" name="reset" value="reset">

    </form>
</body>
</html>