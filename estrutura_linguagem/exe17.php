<?php
    $dados[] = array("nome" => "Maria", "data_nasc" => "10/10/1985",  "salario"=> 2500, "cod_cargo" => 3);
    $dados[] = array("nome" => "Joao", "data_nasc" => "1/1/1983", "salario"=> 1500, "cod_cargo" => 1);
    $dados[] = array("nome" => "Pedro", "data_nasc" => "15/11/1984", "salario"=> 4500, "cod_cargo" => 4);
    $dados[] = array("nome" => "Carla", "data_nasc" => "25/03/1994", "salario"=> 1500, "cod_cargo" => 1);
    $dados[] = array("nome" => "Pedro", "data_nasc" => "01/12/1985", "salario"=> 3500, "cod_cargo" => 3);


     echo "<h3>Sem Ajuste de Salário </h3>";
     for($i=0; $i<count($dados); $i++){
        echo "---------------------------------<br>";
        echo "Nome: ".$dados[$i]["nome"]."<br>";
        echo "Codigo: ".$dados[$i]["cod_cargo"]."<br>";
        echo "Salario: ".$dados[$i]["salario"]."<br>";
        echo "---------------------------------<br>";
     }

     echo "<h3>Com Ajuste de Salário </h3>";
     for($i=0; $i<count($dados); $i++){
          if($dados[$i]["cod_cargo"] == 1){
               $dados[$i]["salario"] = $dados[$i]["salario"] * 1.10;
          }
          echo "---------------------------------<br>";
          echo "Nome: ".$dados[$i]["nome"]."<br>";
          echo "Codigo: ".$dados[$i]["cod_cargo"]."<br>";
          echo "Salario: ".$dados[$i]["salario"]."<br>";
          echo "---------------------------------<br>";
       }
?>