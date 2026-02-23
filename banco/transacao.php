<?php


    enum TipoTransacao:string{
        case Saque = "saque";
        case Deposito = "deposito";
    }

    class Transacao{
        
        private DateTime $data_hora;

        public function __construct(
            private float $valor,
            private TipoTransacao $tipo
        ) {
            $this->data_hora = new DateTime('now', new DateTimeZone('America/Bahia'));
            $this->tipo = $tipo;
            $this->valor = $valor;
            }

        public function getData():DateTime{
            return $this->data_hora;
        }
        
        public function getTipo():string{
            return $this->tipo->value;
        }

        public function getValor():float{
            return $this->valor;
        }

    }