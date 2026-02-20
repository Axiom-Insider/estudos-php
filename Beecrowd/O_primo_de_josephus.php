<?php


    function primo($num){
        if($num < 2){
            return false;
        }else{
            $raiz = sqrt($num);
            for($i = 2; $i <= $raiz; $i++){
                if($num % $i == 0){
                    return false;
                }
            }
        }
        return true;
    }

    while (true) {
        $pessoas = (int)fgets(STDIN);
        $qnt_pessoas = range(0 , $pessoas - 1);
        $i = 2;
        $total = count($qnt_pessoas); 
        print_r($qnt_pessoas);
        echo "                \n";
            do{
                $primo = primo($i);
                if($primo){
                    for ($e=0; $e <= $i; $e++) { 
                    if($e == $i){
                        $qnt_pessoas[$e] = 0;
                        $total--;
                        }
                 }
                }
                $i++;
            }while($total != 1);
        print_r($qnt_pessoas);
        
        }


