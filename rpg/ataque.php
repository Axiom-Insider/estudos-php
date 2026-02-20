<?php 

    class Ataque {
        private Personagem $atacante;
        private Arma $arma;

        public function __construct(Personagem $personagem, Arma $arma){
            $this->atacante = $personagem;
            $this->arma = $arma;
        }

        public function executar():Dano{
            $dano = (int)$this->arma->danoBase + $this->atacante->getNivel();
            return new Dano("Magia", $dano);
        }

        public function relatorio(Dano $dano):string{
            return "Dano causado:" . $dano->desc() . "\n";
        }
    }