<?php
while (true) {
        $N = (int) trim(fgets(STDIN));

        if($N < 1 || $N > 1000){
            break;
        }
        $quantidadeRetangulos = 0;
        for ($i=0; $i < $N; $i++) { 
            $dados = trim(fgets(STDIN));
            list($ci, $vi) = explode(' ', $dados);
            if($ci < 1 || $ci > 10000)break;
            if($vi < 1 || $vi > 1000)break;
            $quantidadeRetangulos += (int) ($vi / 2);
        }

        echo (int) ($quantidadeRetangulos / 2) . "\n";
    }
?>