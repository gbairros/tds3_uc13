<?php
    $dados = ["Pedro", "Maria", "Jose", "Carlos", "Gabi", "João", "Cris"];
    

    for ($i=0; $i<=sizeof($dados)-1; $i++){
        echo "Nome: ".$dados[$i]."<br>";
    }

    echo "<br>";
    for ($i=sizeof($dados)-1; $i>=0; $i--){
        echo "Nome: ".$dados[$i]."<br>";
    }


?>

/*
git add * 
git commit -m "Exercicios Arrays e Repeticao"
git push 
*/