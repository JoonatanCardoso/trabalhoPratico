<?php
require_once 'db_connect.php';
//arquivo de cadastro
if($_POST) {
    $cliente = $_POST['ncliente'];
    $placa = $_POST['placacarro'];
    $datalocacao = $_POST['datalocacao'];


    $sql = "INSERT INTO locacao(ncliente, placacarro, datalocacao) VALUES ('$cliente','$placa',  '$datalocacao')";//cadastra a locação
    if($connect->query($sql) === TRUE) {//se o procedimento der certo mostra "sucess" senao "error"
        echo "SUCESS";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();//fecha a conexão
    header("Location:../locacao.php");
}
?>