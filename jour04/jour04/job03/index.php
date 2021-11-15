<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03 du jour04 de la runtrack2</title>
</head>
<body>
    <?php 
        var_dump($_POST);
        $cP = 0;
        foreach( $_POST as $name)
        {
            for ( $x = 0 ; isset($_POST[$name]); $x++){}
                $cP++;
        }
            echo $cP;
    ?>
    <form action="" method="post">
        <!-- Menu déroulant pour la civilité-->
        <!-- <select>
            <option>
                Mme
            </option>
            <option>
                Mr
            </option>
        </select> -->
        Nom : <input type="text" name="nom" placeholder="Entrez votre nom"/>
        Prénom : <input type="text" name="prenom" placeholder="Entrez votre prénom"/><br><br>
        E-mail <input type="mail" name="email" placeholder="Entrez votre adresse e-mail">
        Mot de passe <input type="password" name="mdp" placeholder="Entrez votre mot de passe"></br></br>
        <input type="submit">
        <input type="reset">
    
    </form>

</body>
</html>