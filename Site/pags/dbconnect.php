<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'site';
    

    $con = new mysqli($host ,$usuario ,$senha,$banco);


    if(mysqli_connect_errno()){
        exit ("Erro ao se conectar no banco de dados: ".mysqli_connect_error());
    }
?>