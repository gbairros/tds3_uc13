<?php
    for ($i=0; $i<=10; $i++){
        echo "<h4>Tabuada do: ".$i."</h4>";
        
        for($j = 0; $j<= 10; $j++){
            $calculo = $i * $j;

            echo "\n==>".$i ." X ".$j. " = ".$calculo;
            echo "<br>";
        }
    }
?>