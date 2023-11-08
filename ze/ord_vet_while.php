<?php

$vetor = [8, 3, 10, 500, 200, 350, 1000, 5];

$i = 0;

while ($i < count($vetor)) {
    $ord = $i;
    $j = $i + 1;

    while ($j < count($vetor)) {
        if ($vetor[$j] < $vetor[$ord]) {
            $ord = $j;
        }
        $j++;
    }

    if ($ord !== $i) {
        $temp = $vetor[$i];
        $vetor[$i] = $vetor[$ord];
        $vetor[$ord] = $temp;
    }

    $i++;
}

foreach ($vetor as $valor) {
    echo $valor . ' ';
}
