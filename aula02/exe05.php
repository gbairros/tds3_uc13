<?php
    $nota1 = 10;
    $nota2 = 10;
    $nota3 = 10;
    $nota4 = 10;
    $media = ($nota1 + $nota2 + $nota3 + $nota4O) / 4;

    if ($media >= 70){
        echo "Aprovado";
    }
    else if ($media >= 50 && $media < 70){
        echo "Em recuperação";
    }
    else{
        echo "Reprovado";
    }

?>