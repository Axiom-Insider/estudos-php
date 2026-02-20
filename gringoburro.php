<?php

        $reais = 6.50;
        $totalReais = 0; 
        
        while(true){
            $n = intval(trim(fgets(STDIN)));
            if($n === 0){
                break;
            }
             if($n < 1 || $n > 30){
                break;
            }
            $v = floatval(trim(fgets(STDIN)));
            if($v < 1 || $v > 50){
                break;
            }
            if($n > 5){
                $v *= 0.85;       
            }
                $libras = $n * $v;
                $totalReais += $libras * $reais;
        }
        
        if($totalReais > 0){
            echo number_format($totalReais, 2, '.', '');
        }
   