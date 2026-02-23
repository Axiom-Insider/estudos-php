<?php


    class ContaBancaria{
        
        private float $saldo = 0.0;
        private Historico $historico;

        public function __construct(private int $numero_conta) 
        {
            $this->historico = new Historico();
            $this->numero_conta = $numero_conta;
        }

        public function getNumero():int{
            return $this->numero_conta;
        }

        public function getSaldo():float{
            return $this->saldo;
        }

        public function getHistorico():Historico{
            return $this->historico;
        }

        public function sacar(float $valor): void{
            if($valor <= 0 || $valor > $this->saldo) return;
            $this->saldo -= $valor;
            $this->historico->setTransacao(new Transacao($valor, TipoTransacao::Saque));
            }

        public function depositar(float $valor):? Transacao{
            if($valor <= 0)return null;
            $this->saldo += $valor;
            return new Transacao($valor, TipoTransacao::Deposito);
        }
    }