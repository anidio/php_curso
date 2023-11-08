<?php

$vetor =['banana', 'maça', 'laranja', 'pera' ];
$valorBusca = 'maça';
function buscador($vetor, $valor){
    foreach ($vetor as $chave => $item){
        if($item == $valor){
            return $chave;
        }
    }
    return -1;
}

$resultado = buscador($vetor, $valorBusca);

if($resultado != -1){
    echo "O valor $valorBusca foi encontrado na posição $resultado do vetor";
}else{
    echo "O valor $valorBusca não foi encontrado";
}
