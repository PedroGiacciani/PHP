<?php
    $userMaster = 'pedro@gmail.com';
    $passMaster = 'pedro123';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == $userMaster && $senha == $passMaster){
        header('location: index.php');
    } else{
        header('location: login.php?erro=1');
    }

    exit();
?>