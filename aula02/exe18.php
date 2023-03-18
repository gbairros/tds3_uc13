<?php

    $dados[] = array("nome" => "Maria", "data_nasc" => "10/10/1985",  "salario"=> 2500, "cod_cargo" => 3);
    $dados[] = array("nome" => "Joao", "data_nasc" => "1/1/1983", "salario"=> 1500, "cod_cargo" => 1);
    $dados[] = array("nome" => "Pedro", "data_nasc" => "15/11/1984", "salario"=> 4500, "cod_cargo" => 4);
    $dados[] = array("nome" => "Carla", "data_nasc" => "25/03/1994", "salario"=> 1500, "cod_cargo" => 1);
    $dados[] = array("nome" => "Pedro", "data_nasc" => "01/12/1985", "salario"=> 3500, "cod_cargo" => 3);

      $pesquisa = "Maria";
    for($i=0; $i<count($dados); $i++){
         if($dados[$i]["nome"] == $pesquisa){ 
            echo "---------------------------------<br>";
            echo "Nome: ".$dados[$i]["nome"]."<br>";
            echo "Codigo: ".$dados[$i]["cod_cargo"]."<br>";
            echo "Salario: ".$dados[$i]["salario"]."<br>";
            echo "---------------------------------<br>";
      }
     }


   $array1 = array("a" => "green", "red", "blue", "red");
   $array2 = array("b" => "green", "yellow", "red");
   $result = array_diff($array1, $array2);

   print_r($result);



?>