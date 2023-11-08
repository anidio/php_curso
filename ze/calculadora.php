<?php
$num = 10;
$num2 = 5;
$media = ($num + $num2)/2;
$operacao = "/";
$resultado =null;

switch ($operacao){
    case "+":
       $resultado = $num + $num2;
           break;
    case "-":
        $resultado  = $num - $num2;
        break;
    case "*":
        $resultado  = $num * $num2;
        break;
    case "/":
        $resultado  =  $num2 == 0 ? "não é possivel dividir por 0": $num / $num2;
        break;

};

    echo $resultado;



