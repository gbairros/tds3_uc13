<?php
    $idade = 20;
    $valor_ingresso = 100;

    if ($idade < 6 || $idade >= 65){
        $valor_ingresso_pagar = 0;
    }
    else if($idade >=6 && $idade <= 10){
        $valor_ingresso_pagar = $valor_ingresso / 2;
    }
    else{
        $valor_ingresso_pagar = $valor_ingresso; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Valor Ingresso</title>
</head>
<body>
    <?php
     echo "Sua idade é: ".$idade;
     echo "<br>";
     echo "Valor do Igresso: ".$valor_ingresso_pagar;
    ?>
</body>
</html> 