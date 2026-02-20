<?php
    $madeiraQnt = 0.5;
    $couroQnt = 0.25;
    $espada = 0;
    $machado = 0;

    do {
        $M = intval(fgets(STDIN));
        $A = intval(fgets(STDIN));
        $C = intval(fgets(STDIN));
    } while (($M < 1 || $M > 500) || ($A < 1 || $A > 500) || ($C < 1 || $C > 500));

    //M
    $machado = $M / $madeiraQnt;
    $espada = $C / $couroQnt;
    $total = $espada > $machado ? $espada : $machado;
    if($total <= $A){
        echo $total;
    }else{
        $temp = $total;
        $total = $total - $A;
        $total = $temp - $total;
        echo $total;
    }
