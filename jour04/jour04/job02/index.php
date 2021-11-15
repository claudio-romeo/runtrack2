<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>

<body>
    <?php
    //affichage du tableau $_GET
    var_dump($_GET);
        //création d'une boucle qui parcourt $_GET ,affectatio des arguments $_GET à $keys affectation des valeurs du tableau à $name
        foreach ($_GET as $keys => $name){
        }
        
    
    ?>

    <form action="" method="get">
        Username : <input type="text" name="username" placeholder="Nom d'utilisateur">
        Password : <input type="password" name="mdp" placeholder="Mot de passe">
        <br>
        E-mail : <input type="email" name="adresse" placeholder="Adresse e-mail">
        
        <input type="submit" >
        <br>
    </form>
    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>
                <?php
                    //récupération des données du tableau $_GET avec affichage des arguments
                    foreach ($_GET as $keys => $name)
                    {
                        echo "$keys : <br>";
                    } 
                ?> 
             </td>
             <td>
                <?php
                    //récupération des données avec affichage des valeurs
                    foreach ($_GET as $keys => $name)
                    {
                        echo "$name <br>";
                    } 
                ?> 
             </td>
        </tr>
    </table>
</body>
       
</html>