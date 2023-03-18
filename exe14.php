<?php

    $tabuada = 7;

    for ($i=0; $i<=10; $i++){
        $calculo = $i * $tabuada;

        echo "\n==>".$tabuada ." X ".$i. " = ".$calculo;
        echo "<br>";
    }

    echo "\n============================\n";
    $i = 0;
    while ($i<=10){
        $calculo = $i * $tabuada;

        echo "\n==>".$tabuada ." X ".$i. " = ".$calculo;
        echo "<br>";
        $i++;
    }