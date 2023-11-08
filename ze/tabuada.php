<?php


for($num =1; $num<=9; $num++) {

    echo("Tabuada de '$num' <br><br>");

    for ($i = 1; $i <= 9; $i++) {
        $mult = $num * $i;

        echo("$num x $i = $mult  <br> ");

    }
    echo("<br>");

}
