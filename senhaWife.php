<?php

    $dia = (int) fgets(STDIN);
    $i = 1;
    $num = 0;
    $senha = [];

    if($dia > 0 || $dia < 31){
        while(true){
            if($num >= 4){
                break;
            }
            if(($i * $i) >= $dia){
                $senha[$num] = $i * $i;
                $num++;
            }
            $i++;
        }
    }

    foreach ($senha as $key => $value) {
        echo $value;
    }