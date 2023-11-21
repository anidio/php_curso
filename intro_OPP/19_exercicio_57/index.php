<?php

    class Cachorro {
        public $raca;
        public $cor;
        public $idade;

        function __construct($raca, $cor, $idade){
            $this->raca = $raca;
            $this->cor = $cor;
            $this->idade = $idade;
        }

        public function exibirAnimal()
        {
            echo "Eu tenho um cachorro da raça $this->raca, de cor $this->cor e que tem $this->idade anos de idade";
        }
    }

    $dog = new Cachorro("Poddle", "Preto", 5);
    $dog->exibirAnimal();

