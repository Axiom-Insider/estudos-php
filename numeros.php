<?php 

    $num = 0;
    $negativo = false;

    $dividendo = (int) fgets(STDIN);
    $divisor = (int) fgets(STDIN);

    $A = $dividendo;
    $B = $divisor;

    while(true){
        if(10000 >= $A && $A <= 10000 && $B >= -10000 && $B <= 10000 && $B != 0){     
                if($A <= 0){
                    $A = $A - $A - $A;
                    $negativo = true;
                }
                if($B <= 0){
                    $B = $B - $B - $B;
                    $negativo = true;
                }
                if($dividendo < 0 && $divisor < 0){
                    $negativo = false;
                }
                if($A < $B){
                    if($dividendo < 0){
                        $A = $A - $A - $A;
                    }
                    break;
                }
                if($negativo){
                    $A -= $B;    
                    $num--;
                    continue;
                }
                
                $A -= $B;
                $num++;
            }
    }

    echo $num . "\n";
    echo $A . "\n";