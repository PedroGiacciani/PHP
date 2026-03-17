<?php
    echo "Digite dois valores na url <br>";
    $n1 = $_GET['primeiroValor'];
    $n2 = $_GET['segundoValor'];
    echo "Escolha uma operação: <br> 1 - Soma <br> 2 - Subtração <br> 3 - Multiplicação <br> 4 - Divisão <br>";
    $op = $_GET['operacao'];
    switch($op){
        case 1:
            $r = $n1 + $n2;
            echo "A soma entre ".$n1." e ".$n2." vale ".$r."";
            break;
        case 2:
            $r = $n1 - $n2;
            echo "A subtração entre ".$n1." e ".$n2." vale ".$r."";
            break;
        case 3:
            $r = $n1 * $n2;
            echo "A multiplicação entre ".$n1." e ".$n2." vale ".$r."";
            break;
        case 4:
            if($n2 != 0){
                $r = $n1/$n2;
                echo "A divisão entre ".$n1." e ".$n2." vale ".$r."";
            } else{
                echo "Impossível dividir por 0";
            }
            break;
        default:
            echo "Opção inválida";
            break;
    }
?>