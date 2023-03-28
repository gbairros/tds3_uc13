<?php
    $texto  = $_POST["texto"];

   	$arquivo = fopen("msg.txt", "w");

   	 fwrite($arquivo, $texto);
   	 echo "Arquivo gerado com sucesso";

   	 fclose($arquivo);
?>
