<?php
    $peixes = [];
    $horas = 0;
    $menorQnt = 0;
    while(true){
        $num = (int) trim(fgets(STDIN));
        if($num < 0)break;
        $horas++;
        $peixes[] = $num;
    }

    
    if($horas > 0){
        $menorQnt = $peixes[0];
        foreach ($peixes as $peixe) {
            if($menorQnt > $peixe){
                $menorQnt = $peixe;
            }
        }
        echo $horas . "\n";
        echo $menorQnt . "\n";
        }
   

    