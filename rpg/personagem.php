<?php 

    class Personagem {
        private string $nome = "Sem Nome";
        private int $nivel = 1;
        private int $hp = 100;
        private Arma $arma;


        public function __construct(? string $nome = null,? int $nivel = null, ? int $hp = null, ? Arma $arma = null){
            if($nome != null)$this->nome = $nome;
            if($nivel != null)$this->nivel = $nivel;
            if($hp != null)$this->hp = $hp;
            $this->arma = $arma ?? new Arma("Espada", 20);
        }


        public function getNivel():int{
            return $this->nivel;
        }

        public function getHp():int{
            return $this->hp;
        }

        public function criarAtaque():Ataque{
            return new Ataque($this, $this->arma);
        }

        public function receberDano(Dano $dano):void{
            $this->hp -= $dano->getDano();
            if($this->hp < 0){
                $this->hp = 0;
            }
            return;
            }

        public function status():string{
             return "Nome:$this->nome, Vida:$this->hp \n";
        }
    }