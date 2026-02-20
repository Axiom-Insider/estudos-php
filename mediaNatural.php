<?php

    $num = 0;
    $total = 0;
    $res = 0.0;

    while (true) {         
        $natural = (int) fgets(STDIN);

        if($natural < 0){ 
            if($num <= 0){
                echo "Nenhum valor natural foi fornecido!";
                break;
            }
            $res = $total / $num;
            echo number_format($res, 1, '.', '') . "\n";
            break; 
        }
        
        $total += $natural;
        $num++;
        continue;
       
    }

   
       
    