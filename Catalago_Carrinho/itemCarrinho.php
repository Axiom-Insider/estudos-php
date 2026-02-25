<?php



    class ItemCarrinho{

        private float  $quantidade;

        public function __construct(
            private Produto $produto,
            ? float $quantidade = 1
        )
        {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }

        public function getProduto():Produto{
            return $this->produto;
        }

        public function getQnt():float{
            return $this->quantidade;
        }

        public function aumentarQnt(float $n):void{
            $this->quantidade += $n;
            return;
        }

        public function diminuirQnt(float $n):void{
            if($this->quantidade - $n <= 0)return;
            $this->quantidade -= $n;
            return;
        }

        public function subTotal():float{
            return $this->produto->getPreco() * $this->quantidade;
        }
    }