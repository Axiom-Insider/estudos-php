<?php


    while(true){
        $temp = [];
        $posicoes = [];
        $corridas = []; 
        $rodadas_pilotos = fgets(STDIN);
    
        $temp = explode(' ', $rodadas_pilotos);
        $rodadas = $temp[0];
        $pilotos = $temp[1];
        if(intval($rodadas_pilotos[0]) === 0 && intval($rodadas_pilotos[1]) === 0)exit;
        if($rodadas < 1 || $rodadas > 100)exit;
        if($pilotos < 1 || $pilotos > 100)exit;
    
        //colocando a posição junto com os pilotos primeiro array é os pilotos dentro de cara tem suas posições 
        for ($i=0; $i < $rodadas; $i++) { 
            $temp_posicoes = fgets(STDIN);
            $posicoes = explode(' ', $temp_posicoes);
            foreach ($posicoes as $key => $value) {
                $corridas[$i + 1][$key + 1] = $value;
            }
            }
    
        // print_r($corridas);
        $sistema_pontuacao = fgets(STDIN);
        if($sistema_pontuacao < 1 || $sistema_pontuacao > 10)exit;
        //sistema de pontuação
        for ($i=0; $i < $sistema_pontuacao; $i++) {
            $k = 0;
            $pontos = []; 
            $pontos_piloto = [];
            for ($u=1; $u <= $pilotos; $u++) { 
                $pontos_piloto[$u] = 0;
            }
            $pilotos_com_mais_ponto = [];
            $maior_ponto = 0;
            $temp_pontos = fgets(STDIN);
            $pontos_temp = explode(' ', $temp_pontos);
            $k = intval($pontos_temp[0]);
            if($k < 1 || intval($k) > intval($pilotos))exit;
            //aquo estou tirando o $k do primeiro array e colocando o primeiro index com 1
            foreach ($pontos_temp as $key => $value) {
                if(intval($value) < 1 || intval($value) > 100)exit;
                if($key != 0){
                    $pontos[$key] = $value;
                }
            }
            // print_r($pontos);
            //aqui eu vou ler as corridas e atribuindo seus pontos conforme seu podio
            for ($e=1; $e <= $rodadas; $e++) {
                for ($o=1; $o <= $pilotos; $o++) {
                    $a = intval($corridas[$e][$o]);
                    if($a > $k){
                        $pontos_piloto[$o] = $pontos_piloto[$o] + 0;      
                    }else {
                        if(isset($pontos[$a])){
                            //echo  "Posição:$a, Maximo de pontos:$k" . "\n";
                            // echo "Essa é a posição " . $corridas["Corrida:". $e]["Piloto:" . $o] . " do Piloto $o" . " Pontos que o piloto vai ganhar $pontos[$o]". "\n";
                            $pontos_piloto[$o] = $pontos_piloto[$o] + $pontos[$a];
                        }else{
                            $pontos_piloto[$o] = $pontos_piloto[$o] + 0;
                        }
                    }
                }
            }
            $maior_ponto = intval(max($pontos_piloto));
            foreach ($pontos_piloto as $key => $value) {
               if($value >= $maior_ponto){ 
                    $pilotos_com_mais_ponto[$key] = $key;
                
               }
            }
            // Garanta que os IDs estejam em ordem crescente, como pede o problema
            sort($pilotos_com_mais_ponto);
            // Junta os IDs com um espaço entre eles e adiciona a quebra de linha
            echo implode(" ", $pilotos_com_mais_ponto) . "\n";
        }

    }
            


?>