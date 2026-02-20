<?php

function lerSequencia() {
    $array = [];
    while (true) {
        $num = (int) trim(fgets(STDIN));
        if ($num < 0) {
            break;
        }
        $array[] = $num;
    }
    return $array;
}

function maiorPar($array) {
    $maiorPar = 0;
    foreach ($array as $valor) {
        if (($valor % 2 == 0) && ($valor > $maiorPar)) {
            $maiorPar = $valor;
        }
    }
    return $maiorPar;
}

$array = lerSequencia();
$num = 0;

foreach ($array as $value) {
    $num++;
}
$quantidade = $num;
$maiorValorPar = maiorPar($array);

echo $quantidade . "\n";
echo $maiorValorPar . "\n";

?>
    