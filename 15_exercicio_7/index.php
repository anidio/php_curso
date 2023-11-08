<?php

    $pessoa = [
        'nome' => "isaias",
        'altura' =>  1.73,
        'etnia' => "negro",
        'idade' => 18
    ];


    $idade = $pessoa['idade'];

    if($idade >= 18){
        echo "É maior de idade, tem $idade anos";
    } else{
        echo "Não é maior de idade, tem $idade anos";
    }