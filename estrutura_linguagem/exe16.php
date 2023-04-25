<?php 
    $dados =  ["nome" => "Maria", "idade" => 30, "email" => "maria@gmail.com", 1000, "Pedro", "telefone" => "22222-222"];
    $dados2 =  ["Maria", 30, "maria@gmail.com"];

    echo "<pre>";
    print_r($dados);
    echo "</pre>";

    echo "<pre>";
    print_r($dados2);
    echo "</pre>";

    echo "<br>";
    echo $dados["nome"];

    echo "<pre>";
    print_r($dados);
    echo "</pre>";

?>