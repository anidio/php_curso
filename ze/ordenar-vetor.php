<?php


//$vetor = [8, 3, 10, 55, 777777, 888888 , 99999, 343434];
//
//$array[0] = $vetor[1];
//$array[1] = $vetor[0];
//$array[2] = $vetor[2];
//$array[3] = $vetor[3];
//$array[4] = $vetor[6];
//$array[5] = $vetor[7];
//$array[6] = $vetor[4];
//$array[7] = $vetor[5];

//foreach ($array as $valor) {
//    echo $valor . ",";
//}


//$num = 10;
//$num2 = 5;
//$media = ($num + $num2)/2;
//$operacao = "/";
//$resultado =null;
//
//switch ($operacao){
//    case "+":
//       $resultado = $num + $num2;
//           break;
//    case "-":
//        $resultado  = $num - $num2;
//        break;
//    case "*":
//        $resultado  = $num * $num2;
//        break;
//    case "/":
//        $resultado  =  $num2 == 0 ? "não é possivel dividir por 0": $num / $num2;
//        break;
//
//};
//
//    echo $resultado;


//    $valor = 0;
//
//    while($valor <= 100){
//        $valor++;
//
//        if($valor % 2 == 0){
//            continue;
//        }
//            echo $valor - 1 . ",";
//
//    }


//$valor = 0;
//
//while($valor <= 100){
//
//
//    if($valor % 2 != 0){
//        $valor++;
//        continue;
//    }
//    echo $valor++ . ",";
//
//}

//for
//while
//do {
//    while
//

$vetor = [8, 3, 10, 55, 777777, 888888 , 99999, 343434];

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



