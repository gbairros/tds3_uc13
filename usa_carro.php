<?php
    require_once("Carro.php");  
    $c1 = new Carro("ABCDE", "Azul", "GM", "Corsa");
    $c1->potencia = 120;
    $c1->qtdeLugares = 5;
    $c1->qtdePortas = 4;
    
    $c2 = new Carro("B2CG1320", "Verde", "Ford", "Fiesta");
    $c2->potencia = 115;
    $c2->qtdeLugares = 5;
    $c2->qtdePortas = 2;

    echo "O carro 1 tem a cor: ".$c1->cor . " - Placa: ".$c1->placa;
    echo "<br>";
    echo "O carro 2 tem a cor: ".$c2->cor . " - Placa: ".$c2->placa;
?>  