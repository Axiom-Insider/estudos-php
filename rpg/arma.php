<?php 
    class Arma {

        public string $tipo ;
        public int $danoBase;

        public function __construct(string $tipo, int  $danoBase){
            $this->tipo = $tipo;
            $this->danoBase = $danoBase;
        }

        public function getTipo():string{
            return $this->tipo;
        }

        public function desc():string{
            return "Arma Tipo:$this->tipo, Dano:$this->danoBase \n";
        }
    }