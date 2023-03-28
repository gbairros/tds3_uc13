<?php
    echo "<pre>";
    $array_opcoes = $_POST['opcoes'];
    
    for ($i = 0; $i<count($array_opcoes); $i++){
        echo "Opcao $i: ".$array_opcoes[$i]."<br>";

    }
    echo "</pre>";
?>