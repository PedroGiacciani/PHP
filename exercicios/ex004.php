<?php
    echo "Digite sua idade na url <br>";
    $idd = $_GET['idade'];
    
    if($idd < 11){
        echo "Você tem ".$idd." anos e é uma criança";
    } else if($idd <= 21){
        echo "Você tem ".$idd." anos e é um adolescente";
    } else if($idd < 60){
        echo "Você tem ".$idd." anos e é um adulto";
    } else {
        echo "Você tem ".$idd." anos e é um idoso";
    }
?>