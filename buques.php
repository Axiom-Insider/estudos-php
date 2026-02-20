<?php
    $mdc = 1;

    $n = (int) trim(fgets(STDIN));
    $m = (int) trim(fgets(STDIN));

    if($n >= 10 && $n <= 300 && $m >= 10 && $m <= 300){
        if($m > $n){
            $temp = $n;
            $n = $m;
            $m = $temp;
        }
       $nTemp = $n;
       $mTemp = $m;
       while($mdc != 0){
        $mdc = $nTemp % $mTemp;
        $nTemp = $mTemp;
        $mTemp = $mdc;  
       }
        
        echo ($n + $m) / $nTemp;
    }
