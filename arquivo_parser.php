<?php
    echo "LENDO ARQUIVO";
    $csv_data = file_get_contents("arquivo_dados.csv");

    //$lines = explode("PHP_EOL", $csv_data);
    $lines = explode("\n", $csv_data);

    echo "<pre>";
    print_r($lines);
    echo "</pre>";

    foreach ($lines as $line){
        echo $line."<br>";
    }
?>