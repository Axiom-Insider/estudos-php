<?php

    $moedas = [];
    $tipoMoedas = [1, 5, 10, 25, 50, 100];
    $quantidadeMoedas = [0, 0, 0, 0, 0, 0];

    $n = intval(trim(fgets(STDIN)));
   
    if($n > 1 && $n < 1000){
       for ($i=0; $i < $n; $i++) { 
        $moedas[$i] = intval(trim(fgets(STDIN)));
    }

    for ($i=0; $i < $n; $i++) { 
        for ($j=0; $j < 6; $j++) {
            if($moedas[$i] == $tipoMoedas[$j]){
                $quantidadeMoedas[$j] += 1;
            }
        }
    }
    
    for ($i=0; $i < 6; $i++) { 
        if($tipoMoedas[$i] > 1 && $tipoMoedas[$i] < 100){
            echo "Moedas de ". $tipoMoedas[$i] . " centavos: ". $quantidadeMoedas[$i] . "\n";
        }elseif($tipoMoedas[$i] == 1){
            echo "Moedas de ". $tipoMoedas[$i] . " centavo: ". $quantidadeMoedas[$i] . "\n";            
        }else{
            echo "Moedas de 1 real: ". $quantidadeMoedas[$i] . "\n";  
        }
    }  
    }else{

    }

   

   
   
    