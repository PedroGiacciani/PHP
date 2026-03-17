<?php
    echo "Digite dois números <br>";
    $n1 = $_GET['primeiroNumero'];
    $n2 = $_GET['segundoNumero'];
    
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1/$n2;

    echo "Soma = ".$soma." <br> Subtração = ".$sub." <br> Multiplicação = ".$mult." <br> Divisão = ".$div.""
?>