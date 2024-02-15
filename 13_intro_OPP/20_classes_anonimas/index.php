<?php

    $pessoa = new Class(){
        public $nome = "Isaias";

        public function dizerNome()
        {
            echo "Olá meu nome é $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();