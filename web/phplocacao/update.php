<?php

require_once 'db_connect.php';
if($_POST['id']) {
    $cliente = $_POST['ncliente'];
    $placa = $_POST['placacarro'];
    $datalocacao = $_POST['datalocacao'];

    $id = $_POST['id'];
    echo $id;
    $sql  = "UPDATE locacao SET NCLIENTE = '$cliente', PLACACARRO= '$placa', DATALOCACAO = '$datalocacao' WHERE id = $id";//faz o update da locação
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();
   header("Location:../locacao.php");

}

?>