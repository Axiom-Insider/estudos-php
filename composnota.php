<?php
    $pesos = 0;
    $notas = 0;
    $num = 0;

while(true){

    if($num >= 3){     
        $media = (float) ($notas / $pesos);
        break;
    }

    $nota = (float) trim(fgets(STDIN)); 
    $peso = (int) trim(fgets(STDIN));
  
    $notas += $nota * $peso;
    $pesos += $peso;
    $num++;

}


echo number_format($media, 1, '.', ''). "\n";