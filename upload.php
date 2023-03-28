<?php
    $nome_arquivo = $_FILES['arquivo']['name'];
    $dir_arquivo= "uploads/".$nome_arquivo;
    $retorno = move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir_arquivo);
    
    if($retorno){
   	    echo "Arquivo carregado com sucesso";
    }
    else{
   	    echo "Erro ao carregar o arquivo";
    }
?>
s