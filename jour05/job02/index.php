<?php

$i = 'jour';

function Bonjour($i)
{
    if ($i == 'jour') {
        echo 'bonjour';
    }

    if ($i !== 'jour') {
        echo 'bonsoir';
    }
}

bonjour($i);


?>

