<?php

    $mmc = 0;

    $a = (int) fgets(STDIN);
    $b = (int) fgets(STDIN);

    if($a > 1 && $a < 365 && $b > 1 && $b < 365){
        if($b > $a){
            $temp = $a;
            $a = $b;
            $b = $temp;
        }
        $mmc = $a;
        while($mmc % $b != 0) { 
            $mmc += $a;
        }
        echo $mmc;
    }

