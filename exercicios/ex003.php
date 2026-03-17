<?php
    echo "Digite a temperatura em Celsius na url <br>";
    $C = $_GET['temperatura'];
    $F = (9 * $C + 160)/5;
    echo "A temperatura em graus Fahrenheit é ".$F."";
?>