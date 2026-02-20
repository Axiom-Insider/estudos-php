<?php
$day = (int) trim(fgets(STDIN));
$cal_ingeridas = 0;
$cal_gastas = 0;

if ($day >= 1 && $day <= 30) {
    for ($i = 1; $i <= $day; $i++) {
        $calorias = (int) trim(fgets(STDIN));
        $km = (int) trim(fgets(STDIN));

        if ($calorias >= 1000 && $calorias <= 10000 && $km >= 1 && $km <= 30) {
            $cal_ingeridas += $calorias;
            $cal_gastas += $km * 65;
        } else {
            echo "Entrada inválida no dia $i. Valores ignorados.\n";
        }
    }

    if ($cal_ingeridas > $cal_gastas) {
        $diferenca = $cal_ingeridas - $cal_gastas;
        echo "Foram ingeridas $diferenca calorias a mais que as calorias gastas\n";
    } elseif ($cal_gastas > $cal_ingeridas) {
        $diferenca = $cal_gastas - $cal_ingeridas;
        echo "Foram gastas $diferenca calorias a mais que as calorias ingeridas\n";
    } else {
        echo "O total de calorias ingeridas foi igual ao de calorias gastas\n";
    }
} else {
    echo "Número de dias inválido. Deve ser entre 1 e 30.\n";
}
?>