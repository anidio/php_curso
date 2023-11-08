<?php
$vetor = [8, 3, 10, 55, 152, 250 , 200, 345];

for ($i = 0; $i < count($vetor); $i++){
    $ord = $i;

    for($j = $i + 1; $j < count($vetor); $j++){
        if ($vetor[$j] < $vetor[$ord]){
            $ord = $j;
        }
    }

    if ($ord !== $i){
        $ord2 = $vetor[$i];
        $vetor[$i] = $vetor[$ord];
        $vetor[$ord] = $ord2;
    }

}
foreach ($vetor as $valor) {
    echo $valor . ' ';
}