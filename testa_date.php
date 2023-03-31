<?php   
    require_once "Date.php";
    $day = 30;
    $month = 06;
    $year = 1985;

    $minhaData = new Date($day,$month,$year);
    echo "Antes do Incremento da Data</br>";
    echo $minhaData->getDate();

    echo "<br><br>Incremento da Data</br>";
    echo $minhaData->nextDate($day,$month,$year);

    
    echo "<br>Next Date utilizando Orientação a Objetos<br>";
    $nextDate =  $minhaData->nextDateCorrect();
    echo $nextDate->getDate();
    