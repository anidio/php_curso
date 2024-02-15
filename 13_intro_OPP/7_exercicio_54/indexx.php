<?php

    class Pessoa{

        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m metros <br>";
        }
    }

    $isaias = new Pessoa;

    $isaias->nome = "Isaias";
    $isaias->idade = 28;

    echo "O nome dele é $isaias->nome e tem $isaias->idade anos <br>";

    $isaias->andar(20);

    $joaquim = new Pessoa();

    $joaquim->nome = "Joaquim";