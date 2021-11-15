<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <?PHP
    //affichage du array $_GET
    var_dump($_GET);
        //création du compteur d'arguments get
        $cC = 0;
        //on parcourt $_GET, et les valeurs de ses inputs seront placés dans $KEY
        foreach ($_GET as $key)
        {
            /*création d'une boucle for qui parcourt $_GET et vérifie que $key est bien défini.
            Si c'est la cas, alors on incrémentera $x avant d'incrémenter le compteur $cC*/
            for ( $x = 0; isset($_GET[$key])==true; $x++){}
                $cC++;
        }
            echo $cC;
    ?>
    <form action="" method="get">
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <br>
        <p>Renseignez vos informations supplémentaires</p>
        <input type="text" name="adresse" placeholder="Adresse">
        <input type="text" name="tel" placeholder="Numéro de téléphone">
        
        <br>
        <input type="submit"  value="Se connecter">
        
        
    </form>
    
    
</body>
</html>