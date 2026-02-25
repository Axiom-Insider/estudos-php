<?php




    class Produto{

        public function __construct(
            private int $id,
            private string $nome, 
            private float $preco
        )
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function getPreco():float{
            return $this->preco;
        }

        public function descricao():string{
            return "ID:$this->id,  NOME:$this->nome, PREÇO:$this->preco";
        }
    }