<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04 du jour04 de la runtrack2</title>
</head>
<body>
    <?php 
        var_dump($_POST)

    ?>
    <form action="" method="post">
       Identifiant :  <input type="text" name="username" placeholder="Entrez votre identifiant">
       Mot de passe : <input type="password" name="mdp" placeholder="Entrez votre mot de passe">
       <br><br>
       Adresse e-mail : <input type="mail" name="email" placeholder="Entrez votre adresse e-mail">
       <br><br>
       Date d'inscription : <input type="date" name="date">
       <br><br>
        <input type="submit">
        <input type="reset">
    </form>
    <table>
        <tr>
            <th>Argument</th>
            <th>valeur</th>
        </tr>
        <tr>
            <td>
                <?php 
                    foreach ($_POST as $keys => $name){
                        echo "$keys <br>";
                    }
                ?>
            </td>
            <td>
                <?php 
                    foreach ($_POST as $keys => $name){
                        echo "$name <br>";
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>