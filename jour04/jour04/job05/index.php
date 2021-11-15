<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    var_dump($_POST);
        //Si le formulaire est rempli
        if(!empty($_POST))
        {
            //Si l'username = John 
            if($_POST['username'] == "John")
            {
                //Et que le password = Rambo
                if($_POST['password'] == "Rambo"){
                //Alors affiché l'echo ci dessous
                echo "C'est pas ma guerre";
            }
            }
            //Sinon affiché l'echo ci dessous
            else {
                echo "Votre pire cauchemar";
            }
        }
        
    ?>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="submit">
    </form>
</body>
</html>