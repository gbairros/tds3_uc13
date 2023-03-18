<?php
    //ESTE É UM EXERCICIO QUE VERIFICA SE UM É BISSEXTO
    
    $ano = 2004;

    if ($ano % 4 == 0 && $ano % 100 != 0 ){
        echo "Ano bissexto";
    }
    else if($ano % 4 == 0 && $ano % 100 == 0 && $ano % 400 == 0  ) {
        echo "Ano bissexto";
    }
    else{
        echo "Não não é bissexto";
    }
    
?>