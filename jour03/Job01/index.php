
<?php
$nombre = ['200', '204', '98', '404', '459', '173', '171'];

foreach ($nombre as $value) {
    if ($value%2 == 0) {
        echo $value . 'est paire <br/>' ;
    } else {
        echo $value . 'est impaire <br/>';
    }
}


