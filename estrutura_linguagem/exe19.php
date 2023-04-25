<?php

  $nome = "maria da silva ";
  $codigo = "     A           ";

  echo "Tamanho: ".strlen($nome);
  echo "<br>";


  echo  strtolower($nome);
  echo "<br>";
  echo  strtoupper($nome);
  echo "<br>";
  echo  ucfirst($nome);

  echo "<br>";
  echo  ucwords($nome);

  echo "<br>";
  
  echo "<br><br>";
  if (str_starts_with($codigo, "AAA")){
    echo $codigo. " - Codigo valido";
  }
  else{
    echo $codigo. " - Codigo invalido ";

  }

  echo "<br>";
  echo $codigo;
  echo "<br>";

  $codigo_limpo = trim($codigo);
  echo "<br>";

  if(empty(trim($codigo))){
      echo "ESTA VAZIO";
  }

  if (strlen(trim($codigo)) == 0){
    echo "<br>ESTA VAZIO 2";

  }

  $str = "Hello Friend";

  $arr1 = str_split($str);
  $arr2 = str_split($str, 3);
  
  echo "<pre>";
  print_r($arr1);
  echo "</pre>";

  echo "<pre>";
  print_r($arr2);
  echo "</pre>";

  $cadastro = "Maria;0120345;maria@gmail.com; 23; AV Brasil, Centro, 134";
  $array_cadastro = explode(";", $cadastro);
  echo "<pre>";
  print_r($array_cadastro);
  echo "</pre>";
?>