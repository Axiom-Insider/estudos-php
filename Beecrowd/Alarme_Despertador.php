<?php
    $tempos = [];
    $dados = '';
    
    while (true) {
        $close = 0;
        $dados = fgets(STDIN);
        $tempos = explode(' ', $dados);

         if($tempos[0] > 23 || $tempos[0] < 0 || $tempos[2] > 23 || $tempos[2] < 0){
            break;
        }

         if($tempos[1] > 59 || $tempos[1] < 0 || $tempos[3] > 59 || $tempos[3] < 0){
            break;
        }
        foreach ($tempos as $key => $value) {
            if(intval($value) === 0){
                $close++;
            }
        }
        if($close === 4){
            break;
        }
        $h1 = $tempos[0];
        $m1 = $tempos[1];
        $h2 = $tempos[2];
        $m2 = $tempos[3];

        $cal1 = $h1 * 60 + $m1;
        $cal2 = $h2 * 60 + $m2;

        if($h1 > $h2){
            $cal2 = 24 * 60 + $cal2;
        }
        if ($h1 == $h2 && $m1 > $m2) {
            $cal2 = 24 * 60 + $cal2;            
        }
        if($h1 == $h2 && $m1 == $m2){
            $cal2 = 24 * 60 + $cal2;            
        }
        
        if($h1 === 0){
            $cal1 = 24 * 60 + $cal1;
        }

         if($h2 === 0){
            $cal2 = 24 * 60 + $cal2;
        }

        $result = abs($cal1 - $cal2);

        echo $result . "\n";

    }