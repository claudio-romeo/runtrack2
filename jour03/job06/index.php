<?php 

    // Job 06
    // Créez une chaîne de caractères str qui contient “Les choses que l'on
    // possede finissent par nous posseder.”. Créez un algorithme qui parcourt et
    // écrit cette chaine à l’envers.
        $str = "Les choses que l'on possede finissent par nous posséder";
        var_dump($str);
        for ($i = 0 ; isset ($str[$i])==true ; $i--){
                echo $str[$i];
            for ($x = 0 ; isset ($str[$x])==false ; $i++)
                echo NULL;
        }
?>