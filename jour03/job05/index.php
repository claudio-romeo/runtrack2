<?php
    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
    var_dump($str);
   
    
    $dic = array 
    (
        'consonnes' => "'Z','R','T','P','Q','S','D','F','G','H','J','K','L','M','W','X','C','V','B','N','z','r','t','p','q','s','d','f','g','h','j','k','l','m','w','x','c','v','b','n'",
        'voyelles' => "'A','E','U','I','O','Y','a','e','y','u','i','o'"
    );
    
    for ( $x = 0; isset($str[$x]); $x++){
        $cV = 0;
        for ($i = 0; isset($dic['voyelles']) == true; $i++){
            if ($str[$x] == $dic['voyelles'][$i]){
                
            }
            $cV++;
        }
        $cC = 0;
        for ($p = 0; isset($dic['consonnes'][$p]); $p++){
            if ($str[$x] == $dic['consonnes'][$p])
            $cC++;
        }
        
        echo $cC++;
    }
    
        
?>