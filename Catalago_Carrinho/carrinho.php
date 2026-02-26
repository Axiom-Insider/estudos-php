<?php

    require_once "itemCarrinho.php";

    class Carrinho{
        
        private array $itens = [];

        public function __construct(){}


        public function adicionarQnt(int $id, int $qnt):void{
            foreach($this->itens as $item){
                if($item->getProduto()->getId() === $id){
                    $item->aumentarQnt($qnt);
                    return;
                }
            }
        }

        public function diminuirQnt(int $id, int $qnt):void{
            foreach($this->itens as $item){
                if($item->getProduto()->getId() === $id){
                    $item->diminuirQnt($qnt);
                    if($item->getQnt() <= 0){
                        $this->remove($item->getProduto()->getId());
                    }
                    return;
                }
            }
        }

        public function add(Produto $produto, float $qnt):void{
            foreach ($this->itens as $item) {
                if($produto->getId() === $item->getProduto()->getId()){  
                    $item->aumentarQnt($qnt); 
                    return;
                }
            }
            $this->itens[] = new ItemCarrinho($produto, $qnt);
            return;
        }

        public function remove(int $id):void{
            foreach($this->itens as $key =>  $item){
                if($item->getProduto()->getId() === $id)unset($this->itens[$key]);
            }
        }

        public function listar():void{
            foreach($this->itens as $item){
                echo "QUANTIDADE - {$item->getQnt()} \n";
                echo $item->getProduto()->descricao() . "\n";
            }
        }

        public function total():float{
            $valorTotal = 0;
            foreach($this->itens as $item){
                $valorTotal += $item->subTotal();
            }
            return $valorTotal;
        }

    }