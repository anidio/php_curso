<?php

$arr =[
    'porta' => 100,
    'maçaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function itensCaros($arr){

    $arrCaros = [];

    foreach ($arr as $itens => $preco){

        if($preco > 10){
            array_push($arrCaros,$itens);
        }
    }

    return $arrCaros;
}

$novoArr = itensCaros($arr);

print_r($novoArr);