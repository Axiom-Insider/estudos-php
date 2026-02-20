<?php
    $linha = 0;
    $quantidadeDeMorango = [];

    $num = trim(fgets(STDIN));
    list($l, $c) = explode(' ', $num);
    
    if(($l > 0 && $l < 50) && ($c > 0 && $c < 50)){
        for ($i=0; $i < $l; $i++) {
                $dados = trim(fgets(STDIN)); 
                $plantacao[$i] = explode(' ', $dados);  
                for ($j=0; $j < $c; $j++) { 
                if($plantacao[$i][$j] > 1000 || $plantacao[$i][$j] < 0){
                    exit;
                }
            }      
        }
        
        for ($i=0; $i < $l; $i++) { 
            $quantidadeDeMorango[$i] = 0;
            for ($j=0; $j < $c; $j++) { 
                $quantidadeDeMorango[$i] += $plantacao[$i][$j];        
            }      
        }

        $total = $quantidadeDeMorango[0];
        for ($i=0; $i < $l; $i++) { 
                if($quantidadeDeMorango[$i] > $total){
                    $linha = $i;
                    $total = $quantidadeDeMorango[$i];
               } 
        }
        for ($i=0; $i < $l; $i++) { 
                if($total == $quantidadeDeMorango[$i]){
                    $linha = $linha > $i ? $i : $linha;
                }
        }

       echo "A fileira com maior producao eh a de numero " . ($linha + 1) . ". \n";
       echo "Total colhido: $total morangos.";

    }