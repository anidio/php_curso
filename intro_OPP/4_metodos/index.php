<?php

    class Pessoa{
        function falar(){
            echo "Olá, eu sou um objeto! <br>";
        }
    }

    $isaias = new Pessoa();
    $isaias->falar();

    $joao = new Pessoa();
    $joao->falar();
