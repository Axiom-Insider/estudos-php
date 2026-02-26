<?php



    class ItemCarrinho{

        public function __construct(
            private Produto $produto,
            private int $quantidade,
        )
        {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }

        public function getProduto():Produto{
            return $this->produto;
        }

        public function getQnt():int{
            return $this->quantidade;
        }

        public function aumentarQnt(int $n):void{
            $this->quantidade += $n;
            return;
        }

        public function diminuirQnt(int $n):void{
            $this->quantidade -= $n;
            return;
        }

        public function subTotal():float{
            return $this->produto->getPreco() * $this->quantidade;
        }
    }