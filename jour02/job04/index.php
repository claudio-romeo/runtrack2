<?php

$i = 0;

while ($i <= 100) {
    if ($i % 3 == 0 && $i % 5 !== 0) {
        echo 'Fizz <br/>';
    } elseif ($i % 5 == 0 && $i % 3 !== 0) {
        echo 'Buzz <br/>';
    } elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo 'FizzBuzz <br/>';
    }
    $i++;
}

// initialisation de la variable I , tant que la valeur I n'atteint pas le chiffre 100 la boucle continu
// SI le nombre est un multiple de 3 alors on affiche FIZZ
// Sinon si le nombre et un multiple de 5 on affiche Buzz
//sinon pour les multiple de 3 et de 5 tu affiche Fizzbuzz//

?>
