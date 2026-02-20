<?php

    $num = 0;

    $A = (int) fgets(STDIN);
    $B = (int) fgets(STDIN);

    while(true){
         if($A < $B){
                    break;
                }
        if(0 <= $A && $A <= 10000 && $B >= 1 && $B <= 10000){              
                $A -= $B;
                $num++;
            }
    }

    echo $num . "\n";
    echo $A . "\n";