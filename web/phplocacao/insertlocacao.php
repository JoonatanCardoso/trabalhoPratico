<?php

require_once 'db_connect.php';

if($_POST) {
    $cliente = $_POST['ncliente'];
    $placa = $_POST['placacarro'];
    $datalocacao = $_POST['datalocacao'];


    $sql = "INSERT INTO locacao(ncliente, placacarro, datalocacao) VALUES ('$cliente','$placa',  '$datalocacao')";
    if($connect->query($sql) === TRUE) {
        echo "SUCESS";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
    header("Location:../locacao.php");
   /* if($senha == $confsenha ){

    }else {
        echo  "senha incorreta ";
        $connect->close();
        header("Location:../index.php");
    }*/


}

?>