<?php


    class Historico{

        public function __construct(
            private array $transacoes = []
        )
        {
            $this->transacoes = $transacoes;
        }

        public function setTransacao(Transacao $transacoes):void{
            $this->transacoes[] = $transacoes;
        }

        public function gerarExtrato():array{
            $extrato = [];
            if(empty($this->transacoes))echo "Nenhuma transação foi encontrada \n";
            $num = 0;
            foreach($this->transacoes as $transacao){
                $extrato[$num]["tipo"] = $transacao->getTipo(); 
                $extrato[$num]["valor"] = $transacao->getValor();
                $extrato[$num]["data"] = $transacao->getData()->format('H:i'); 
                $num++;
            }
            return $extrato;
        }

        public function listartExtrato($array):void{
           foreach ($array as $value) {
                echo "Tipo:{$value["tipo"]}, Valor:{$value["valor"]}, Hora:{$value["data"]}\n";
           }
        }
    }