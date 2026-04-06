<style>
    body{
        font-size: 1.5em;
    }
</style>
<?php
    $num = $_GET["numero"];
    echo "Digite um número na url<br>";

    for( $i = 0; $i <= 10; $i++){
        echo " ".$num." X ".$i." = ".$num*$i." <br>";
    }
?>