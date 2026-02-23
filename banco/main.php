<?php

    declare(strict_types=1);

    require_once 'autoload.php';


    $banco = new Banco();
    $banco2 = new Banco();

    $numero1 = $banco->criarConta();
    $numero2 = $banco2->criarConta(); 
    
    $conta1 = $banco->localizarConta($numero1);
    $conta1Copia = $conta1;
    $conta1->depositar(120.30);
    $conta1->sacar(27.03);

    $extrato = $conta1->getHistorico()->gerarExtrato();
    $conta1->getHistorico()->listartExtrato($extrato);

    echo "Saldo da conta1: {$conta1->getSaldo()}, Saldo da copia: {$conta1Copia->getSaldo()} \n";

    echo "Quantidade de Contas:{$banco->getQntContas()}";
