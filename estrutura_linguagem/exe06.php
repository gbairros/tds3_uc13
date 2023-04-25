<?php
    $salario = 1500;

    if ($salario <= 1500){
        $novo_salario = $salario * 1.15;
    }
    else if($salario > 1500 && $salario <= 3000){
        $novo_salario = $salario * 1.10;
    }
    else{
        $novo_salario = $salario * 1.05; 
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aumento do Salário</title>
</head>
<body>
    <?php
      echo "Novo Salario: <b><i>R$ ".number_format($novo_salario, 2, ',', '.')."</i></b>";
    ?>
</body>
</html>