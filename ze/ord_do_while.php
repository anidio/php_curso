<?php

$vetor = [8, 3, 1, 500, 200, 350, 1000, 5];
$n = count($vetor);

do{
    $ord = false;
    for ($i = 0; $i < $n -  1; $i++){
        if($vetor[$i] > $vetor[$i + 1]){

            $temp = $vetor[$i];
            $vetor[$i] = $vetor[$i + 1];
            $vetor[$i + 1] = $temp;
            $ord = true;

        }
    }
}while($ord);

foreach ($vetor as $valor){
    echo $valor . " ";
}
