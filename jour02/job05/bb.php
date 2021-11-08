<?php
$str = "I'm sorry Dave I'm afraid i can't do that";

$v = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; isset($str[$i]); $i++) {
    foreach ($v as $val) {
        if ($str[$i] == $val) {
            echo $str[$i];
        }
    }
}

?>
