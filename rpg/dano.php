<?php


class Dano {

    public int $valor;
    private string $tipo;

    public function __construct(string $tipo, int $valor){
        $this->valor = $valor;
        $this->tipo  = $tipo;

    }


    public function getDano():int {
        return $this->valor;
    }

    public function desc():string{
        return "Dano Tipo:$this->tipo, Valor:$this->valor \n";
    }
}