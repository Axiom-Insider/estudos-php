<?php 


    require_once "autoload.php";


    $carrinho = new Carrinho();
    $caderno = new Produto(3, 'caderno', 20.23);
    $lapis = new Produto(2, 'lapis', 45.50);

    $carrinho->add($caderno, 2);
    $carrinho->add($lapis, 1);
    // $carrinho->remove(3);
    $carrinho->adicionarQnt(2, 3);
    $carrinho->diminuirQnt(2, 1);
    $carrinho->diminuirQnt(3, 1);
    $carrinho->listar();
    // $carrinho->listar();
    echo "Total:" . $carrinho->total();

