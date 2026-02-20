<?php

   require_once 'autoload.php';

    $arma = new Arma("espada", 40);

    $coringa = new Personagem("Coringa", 2, 100, $arma);
    $batmen = new Personagem("Batmen", 2, 100, $arma);

    $ataque = $coringa->criarAtaque();

    echo "Ataque criado com sucesso \n";

    $dano = $ataque->executar();

    echo $dano->desc();

    $batmen->receberDano($dano);
    $batmen->receberDano($dano);
    $batmen->receberDano($dano);

    echo "Vida do batmen depois do ataque:". $batmen->getHp() . "\n";


