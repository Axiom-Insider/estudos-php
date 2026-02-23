<?php


    class Banco{
        
        private static int $qnt_conta = 0;
        
        public function __construct(
            private array $contas = [],
        ){}

        public function getQntContas ():int{
            return self::$qnt_conta;
        }

        public function criarConta():int{
            self::$qnt_conta++;
            $randomizer = new \Random\Randomizer();
            $numeroConta = $randomizer->getInt(1000, 9999);            
            $this->contas[] = new ContaBancaria($numeroConta);
            return $numeroConta;
        }

        public function localizarConta(int $numero_conta):?ContaBancaria{
            foreach ($this->contas as $conta) {
                if($conta->getNumero() === $numero_conta)return $conta;
            }

            return null;
        }

    }