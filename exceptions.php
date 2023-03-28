<?php
    require_once("CustomException.php");
    try {
    // init bootstrapping phase 

    $config_file_path = "config.php";
    $quantidade = 0;

    if (!file_exists($config_file_path)){
        throw new Exception("Arquivo de config não encontrado!!");
    }
    if($quantidade <=0){
        throw new CustomException("Quantidade invalida");
    }
    }

    catch (CustomException $e){
        echo $e->getMessage();
    }
    catch (Exception $e) {  
        echo $e->getMessage();
    //die();
    }
    /*finally{
        echo "<br>Sempre vou executar!!<br>";
    }*/
?>