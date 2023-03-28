<?php
    $num1 = 10;
    $num2 = 5;

    $soma = $num1 + $num2;

    if ($soma > 20){
        $resultado = $soma + 8;
    }
    else{
        $resultado = $soma - 5;
    }

?>
<html>
    <head>
        <title>Exercicio </title>
    </head>
    <body>
        <?php
                echo "O resultado é: ".$resultado;
        ?>    
    </body>
</html>