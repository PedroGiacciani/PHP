<?php
    echo "Digite duas idades <br>";
    $idd1 = $_GET['primeiraIdade'];
    $idd2 = $_GET['segundaIdade'];
    
    if($idd1 > $idd2){
        echo "A pessoa com ".$idd1." é mais velha";
    } else{
        echo "A pessoa com ".$idd2." é mais velha";
    }
?>