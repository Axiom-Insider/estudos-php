<?php

    $custoVinho = 11;
    $custoCarne = 7;
    $custoVerdura = 4;

    do {
        $h = intval(fgets(STDIN));
        $m = intval(fgets(STDIN));
    } while (($h < 1 || $h > 100) || ($m < 1 || $m > 100));

    $tolta = $h * ($custoCarne  + ($custoVerdura / 2) + ($custoVinho * 2));
    $tolta += $m * ( ($custoCarne / 2) + $custoVerdura + ($custoVinho * 3));

    echo number_format($tolta, 2, '.', '');